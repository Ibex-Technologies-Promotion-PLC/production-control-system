<?php

namespace App\Http\Livewire\Traits\DispatchOrders;

use App\Common\Facades\Conversions;
use App\Models\DispatchOrder;
use App\Models\DispatchProduct;
use App\Models\ReservedStock;
use App\Models\StockMove;
use App\Models\Transaction;
use Illuminate\Support\Facades\Log;

trait DispatchLotPicker
{
    // model rows
    public $rows;

    public $doLotModal = false;
    public $selectedDispatchProduct;

    public $reservationViewModal = false;
    public $baseUnit;
    public $product_id;
    public $lotsData;
    public $dispachOrderId;
    public $selling_prices = [];


    protected function rules()
    {
        return [
            'rows.*.lot_number' => 'required',
            'rows.*.reserved_amount' => 'required|numeric',
        ];
    }

    protected function validationAttributes()
    {
        return [
            'rows.*.lot_number' => __('dispatchorders.lot_number'),
            'rows.*.reserved_amount' => __('common.amount'),
        ];
    }



    /**
     * Open modal for specifying lot sources to dispatch
     */
    public function openDoLotModal($id)
    {
        $this->product_id = $id;
        $this->selectedDispatchProduct = DispatchProduct::find($id);
        $this->dispachOrderId = DispatchOrder::find($this->selectedDispatchProduct->dispatch_order_id);
        $this->baseUnit = $this->selectedDispatchProduct->unit->where('is_base', 1)->first();
        $this->lotsData = $this->allWithAmounts();
        // dd($this->selectedDispatchProduct->product);

        $this->reset('rows');

        if ($this->isInEditMode()) {
            return $this->setEditMode();
        }

        $this->doLotModal = true;
        $this->addRow();
    }
    public function updatedSellingPrices($value, $location)
    {
        if ($location !== 0) {

            $this->selling_prices[$location] = $value;
        } else {
            Log::info('Error: Invalid input received in updatedSellingPrices' );
        }
    }

    private function uniqueLots()
    {
        return StockMove::where(['product_id' => $this->product_id])
            ->select('lot_number')
            ->distinct()
            ->get()->pluck('lot_number');
    }


    public function only($lot)
    {
        return $this->positive($lot) - $this->negative($lot);
    }

    private function positive($lot)
    {
        return StockMove::where([
            'product_id' => $this->product_id,
            'lot_number' => $lot,
            'approved' => true,
            'direction' => true,
        ])->sum('base_amount');
    }

    private function negative($lot)
    {
        return StockMove::where([
            'product_id' => $this->product_id,
            'lot_number' => $lot,
            'approved' => true,
            'direction' => false,
        ])->sum('base_amount');
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

            // dd($amount, $reservedAmount);
            $availableAmount = $amount - $reservedAmount;

            $unit = $this->baseUnit;
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
                'product_id' => $this->product_id,
                'reserved_is_archived' => false,
            ]
        )->sum('reserved_amount') + 0;
    }
    public function closeDoLotModal()
    {
        $this->reset('rows', 'doLotModal', 'selectedDispatchProduct');
    }

    private function nFormat($number)
    {
        return number_format((float)$number, 2);
    }



    public function updatedDoLotModal($bool)
    {
        if (!$bool) $this->closeDoLotModal();
    }



    public function openReservationViewModal($id)
    {
        $this->selectedDispatchProduct = DispatchProduct::find($id);

        $this->reservationViewModal = true;
    }

    public function updatedReservationViewModal($bool)
    {
        if (!$bool) $this->reset('selectedDispatchProduct');
    }



    /**
     * Add a brand new row into the row
     */
    public function addRow()
    {
        if ($this->cannotAddRow()) return;
        $this->rows[] = [
            'lot_number' => null,
            'reserved_amount' => null,
        ];
    }


    /**
     * Removes row of index
     */
    public function removeRow($index)
    {
        if ($this->cannotRemoveRow()) return;
        unset($this->rows[$index]);
    }





    /**
     * Index stands for rows' index
     */
    public function updatedLotNumber($index, $lotNumber)
    {
        // don't let selected lot numbers to be same in all rows
        if (in_array($lotNumber, array_column($this->siblings($index), 'lot_number'))) {
            $this->rows[$index]['lot_number'] = null;
            $this->dispatch('toast', '', __('dispatchorders.this_lot_selected_already'), 'error');
        }

        $this->updatedReservedAmount($index);
    }




    /**
     * Index stands for rows' index
     */
    public function updatedReservedAmount($index, $value = null)
    {
        $row = $this->rows[$index];
        $inputAmount = $row['reserved_amount'];
        $lotMax = $this->lotMax($row['lot_number']);

        if (! $row['lot_number'] || ! $this->rows[$index]['reserved_amount']){
            return $this->rows[$index]['reserved_amount'] = null;

        }
          

        $need = $this->getToBase()['amount'] - $this->siblingsCovered($index);

        if ($inputAmount <= $lotMax) {
            if ($inputAmount >= $need) {
                $this->rows[$index]['reserved_amount'] = $need;
            }
        } else {
            if ($need <= $lotMax) {
                $this->rows[$index]['reserved_amount'] = $need;
            } else {
                $this->rows[$index]['reserved_amount'] = $lotMax;
            }
        }
    }



    /**
     * Extracts rows' indexes, values and calls to the related function
     */
    public function updatedRows($value, $location)
    {
        // prepare-inprogress eye ikonuna tıkladığımda bu fonksiyon alakasız bir şekilde tetik alıyor, önüne böyle geçtim..
        if (! $this->doLotModal) return;

        $array = explode('.', $location);
        $index = $array[0];
        $field = $array[1];

        if ($field == 'lot_number') {
            return $this->updatedLotNumber($index, $value);
        } else {
            return $this->updatedReservedAmount($index, $value);
        }
    }



    /**
     * Validates and submits the form
     */
    public function submitLots()
    {
        if (! $this->selectedDispatchProduct) return;
        if ($this->cannotSubmit()) return;

        $this->validate();

        if ($this->isInEditMode())
            $this->selectedDispatchProduct->reservedStocks()->delete();

        foreach ($this->rows as $row) {
            $this->dispatchOrder->reservedStocks()->create([
                'product_id' => $this->selectedDispatchProduct->product_id,
                'reserved_lot' => $row['lot_number'],
                'reserved_amount' => $row['reserved_amount'],
            ]);
        }
        if (count($this->selling_prices) > 0) {
            foreach ($this->selling_prices as $productId => $price) {
                $totalPrice = $this->selectedDispatchProduct->dp_amount * $price;
                $transaction = new Transaction();
                $transaction->product_id = $productId; 
                $transaction->total = $totalPrice; 
                $transaction->company_id = $this->dispachOrderId->company_id; 
                $transaction->save(); 
            }
        }

        $this->selectedDispatchProduct->setReady();

        $this->closeDoLotModal();
        $this->refresh();
    }





    /************ Edit Mode ********************************************** */
    /********************************************************************* */

    private function setEditMode()
    {
        // just a protection 
        if ($this->selectedDispatchProduct->reservedStocks->isEmpty()) return;

        // fill in the rows with incoming data
        foreach ($this->selectedDispatchProduct->reservedStocks as $reservation) {
            $this->rows[] = [
                'lot_number' => $reservation->reserved_lot,
                'reserved_amount' => $reservation->reserved_amount,
            ];
        }
        $this->doLotModal = true;
    }


    public function isInEditMode()
    {
        return $this->selectedDispatchProduct->isReady();
    }



    public function emptyDpReserveds($id)
    {
        $dispatchProduct = DispatchProduct::find($id);
        if ($dispatchProduct->dispatchOrder->isInProgress()) {
            $dispatchProduct->undoReady();
            $this->refresh();
        }
    }


    /************ Logical Helpers ********************************************** */
    /*************************************************************************** */



    /**
     * Gives all rows except itself(index)
     */
    public function siblings($index): array
    {
        // dd($this->rows);
        $rows = $this->rows;
        unset($rows[$index]);
        return $rows;
    }



    /**
     * Sum of rows' reserved_amount columns except row itself(index)
     */
    private function siblingsCovered($index)
    {
        return $this->coveredAmount() - $this->rows[$index]['reserved_amount'];
    }



    /**
     * Gives actual stock amount which depends on lot number
     */
    private function lotMax($lotNumber)
    {
        return $this->selectedDispatchProduct->product->onlyLot($lotNumber); // ?? index geç içine
    }



    /**
     * Total covered amount by user
     */
    public function coveredAmount()
    {
        return array_sum(array_column($this->rows, 'reserved_amount'));
    }



    /**
     * Representation for user to know how many sources he/she needs
     */
    public function necessaryAmount()
    {
        $amount = $this->getToBase()['amount'];
        return $amount - $this->coveredAmount();
    }




    public function getToBase()
    {
        return Conversions::toBase($this->selectedDispatchProduct->unit, $this->selectedDispatchProduct->dp_amount);
    }





    /************ Rules ********************************************** */
    /***************************************************************** */

    /**
     * Limit addable rows by count of existing lot sources
     */
    public function cannotAddRow(): bool
    {
        return $this->rows && $this->selectedDispatchProduct->product->lotCount() <= count($this->rows);
    }


    /**
     * Limit deletion of rows when it has only one
     */
    public function cannotRemoveRow(): bool
    {
        return count($this->rows) === 1;
    }



    public function inputDisabled($index): bool
    {
        // dd($index);
        return $this->rows[$index]['lot_number'] == null;
    }



    /**
     * Custom validations just before the submit
     */
    public function cannotSubmit(): bool
    {
        // Needs for order must be covered and lots must be different from one another
        return $this->getToBase()['amount'] != $this->coveredAmount()
            || count(array_unique(array_column($this->rows, 'lot_number'))) !== count($this->rows)
            || ! $this->selectedDispatchProduct->dispatchOrder->isNotFinalized();
    }
}
