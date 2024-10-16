<?php

namespace App\View\Components;

use App\Models\Unit;
use Illuminate\View\Component;

class ReservedStocksTable extends Component
{
    public $reservations;
    public $noHead;
    public $noProduct;
    public $emptyMessage;
    public $baseUnits;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($reservations, $noHead = false, $noProduct = false, $emptyMessage = 'common.empty')
    {
        $this->reservations = $reservations;
        // dd($this->reservations[0]->product->Units);
        $this->noHead = $noHead;
        $this->noProduct = $noProduct;
        $this->emptyMessage = $emptyMessage;
        $this->baseUnits = $this->getBaseUnits($reservations['0']->product->units['0']->id); // Call get() to retrieve the collection
    }
    public function getBaseUnits($id)
    {
        return Unit::where('id', $id)->get();
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.reserved-stocks-table');
    }
}
