<?php

namespace App\Http\Livewire\Traits\DispatchOrders;

use App\Common\Facades\Conversions;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

trait SpecifyProducts
{


    // public $spModal = false;

    // model cards
    public $cards;
    public $specificUnits = []; 

    protected $spRules = [
        'cards' => 'array',
        'cards.*.product_id' => 'required|integer',
        'cards.*.dp_amount' => 'required|numeric',
        'cards.*.unit_id' => 'required|integer',
    ];



    protected function spValidationAttributes()
    {
        return [
            'cards.*.product_id' => __('products.product'),
            'cards.*.dp_amount' => __('common.amount'),
            'cards.*.unit_id' => __('units.unit'),
        ];
    }


    
    // public function openSpModal()
    // {
    //     $this->spModal = true;
    // }


    public function getProductsProperty()
    {
        return Product::select('id', 'prd_name', 'prd_code')->get();
    }



    
    public function addCard()
    {
        Log::info('in the add card ');
        $this->cards[] = [
            'product_id' => null,
            'dp_amount' => null,
            'unit_id' => null,
            'units' => [],
        ];
    }


    public function getCountFilledCards()
    {
        return count(array_filter(array_column($this->cards, 'product_id')));
    }


     /**
     * Nested product_id on updated event 
     * Fill out the units dropdown based on selected product 
     */
    public function updatedCards($id, $location)
    {
        if(strpos($location, 'product_id')) {
            $index = strtok($location, '.');
            $product = $this->getProductsProperty()->find($id);
                    $this->cards[$index]['units'] = $product->units;
                    $this->specificUnits = $this->cards[$index]['units'];
            $this->dispatch('sp_product_selected'.$index);
            
            $baseUnit = $product->units->firstWhere('is_base', 1);
            if($baseUnit) 
            $this->cards[$index]['unit_id'] = $baseUnit->id;


        }
    }
    public function getSpecificUnitsProperty(){
        return $this->specificUnits;
    }





    public function removeCard($id)
    {
        if(count($this->cards) > 1)
            unset($this->cards[$id]);
    }





    private function spSubmit($dispatchOrder)
    {
        foreach($this->cards as $card) {
            $dispatchOrder->dispatchProducts()->create([
                'product_id' => $card['product_id'],
                'dp_amount' => $card['dp_amount'],
                'unit_id' => $card['unit_id'],
            ]);
        }
    }





    private function spProductsEditMode($dispatchOrder)
    {
        foreach($dispatchOrder->dispatchProducts as $key => $dp) {
            $this->cards[] = [
                'product_id' => $dp->product_id,
                'dp_amount' => $dp->dp_amount,
                'unit_id' => $dp->unit_id,
                'units' => $dp->product->units,
            ];
        }
    }

}


