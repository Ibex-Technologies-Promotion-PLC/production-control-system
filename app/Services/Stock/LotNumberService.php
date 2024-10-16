<?php

namespace App\Services\Stock;

use App\Models\Product;
use App\Models\ReservedStock;
use App\Models\StockMove;
use Illuminate\Support\Facades\Log;

class LotNumberService
{
    private  $product;


    public function __construct(Product $product)
    {
        $this->product = $product;
    }



    public function total()
    {
        $amount = array_sum(array_column($this->allWithAmounts(), 'amount'));
        $availableAmount = array_sum(array_column($this->allWithAmounts(), 'available_amount'));
        $reservedAmount = array_sum(array_column($this->allWithAmounts(), 'reserved_amount'));
        $unit = $this->product->baseUnit;
        return [
            'amount' => $amount,
            'available_amount' => $availableAmount,
            'reserved_amount' => $reservedAmount,
            'amount_string' => $this->nFormat($amount) . ' ' . $unit,
            'available_amount_string' => $this->nFormat($availableAmount) . ' ' . $unit,
            'reserved_amount_string' => $this->nFormat($reservedAmount) . ' ' . $unit,
            'unit' => $unit,
        ];
    }


    private function nFormat($number)
    {
        return number_format($number, 2);
    }


    /**
     * Get total amount of updirection stockmoves
     */
    private function positive($lot)
    {
        return StockMove::where([
            'product_id' => $this->product->id,
            'lot_number' => $lot,
            'approved' => true,
            'direction' => true,
        ])->sum('base_amount');
    }




    /**
     * Get total amount of downdirection stockmoves
     */
    private function negative($lot)
    {
        return StockMove::where([
            'product_id' => $this->product->id,
            'lot_number' => $lot,
            'approved' => true,
            'direction' => false,
        ])->sum('base_amount');
    }




    /**
     * @return float actual amount of given lot
     */
    public function only($lot)
    {
        return $this->positive($lot) - $this->negative($lot);
    }




    public function count()
    {
        return count($this->uniqueLots());
    }




    /**
     *  Drops down into one all stockmove lot occurrences
     * 
     * @return array unique lot numbers
     */
    private function uniqueLots()
    {
        return StockMove
            ::where(['product_id' => $this->product->id])
            ->select('lot_number')
            ->distinct()
            ->get()->pluck('lot_number');
    }




    /**
     * @return array lot numbers and amounts
     */
    public function allWithAmounts()
    {
        // $arr = [];
        foreach ($this->uniqueLots() as $lot) {
            $amount = $this->only($lot);
            if ($amount == 0) continue;

            $reservedAmount = $this->reservedAmount($lot);
            $availableAmount = $amount - $reservedAmount;

            $unit = $this->product->baseUnit;
            $arr[] = [
                'lot_number' => $lot,
                'amount' => $amount,
                'available_amount' => $availableAmount,
                'reserved_amount' => (float)$reservedAmount,
                'amount_string' => $this->nFormat($amount) . ' ' . ($unit ? $unit->name : 'Kg'),
                'available_amount_string' => $this->nFormat($availableAmount) . ' ' . ($unit ? $unit->name : 'Kg'),
                'reserved_amount_string' => $this->nFormat($reservedAmount) . ' ' . ($unit ? $unit->name : 'Kg'),

                'unit' => $unit,
            ];
        }
        return isset($arr) ? $arr : [];
    }




    public function reservedAmount($lot)
    {
        return ReservedStock::where(
            [
                'reserved_lot' => $lot,
                'product_id' => $this->product->id,
                'reserved_is_archived' => false,
            ]
        )->sum('reserved_amount') + 0;
    }
}
