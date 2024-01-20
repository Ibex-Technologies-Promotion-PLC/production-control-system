<?php

namespace App\Http\Livewire\StockMoves;

use App\Contracts\ExportsContract;
use App\Http\Livewire\SmartTable;
use App\Http\Livewire\Traits\Exportable;
use App\Models\StockMove;
use App\Services\Product\ProductService;
use Livewire\Component;

class Datatable extends Component implements ExportsContract
{
    use SmartTable;
    use Exportable;

    public $model = StockMove::class;
    public $view = 'livewire.stock-moves.datatable';

    protected $queryString = ['filterType',  'filterProduct'];


    private function resetFilters()
    {
        $this->reset('filterFromDate', 'filterToDate', 'filterProduct','filterType');
    }

    protected $orderByDefault = [
        'column' => 'datetime',
        'direction' => 'asc',
    ];
    // filters
    public $filterProduct;
    public $filterType;

    private function advancedFilters()
    {
        return [ 
            ['product_id' => $this->filterProduct], 
            ['type' => $this->filterType],
        ];
    }

    public function mount($product = null) // override
    {
        $this->stInit(); // smarttable içinde
        if($product) {
            $this->showFilters = true;
            $this->filterProduct = $product->id;
        }
    }
    


    public function delete($id) // !! bunu bir trait yardımıyla tüm componentlere ekleyebilirim.
    {
        $result = $this->model::findAndDelete($id);
        if(is_array($result) && $result['type'] == 'error') {
            $this->emit('toast', __('common.error.title'), $result['message'], 'warning');
        } 
        // else {
        //     $this->emit('toast', '', $result['message'], 'success');
        //     $this->reset();
        // }
    }
    
    public function getProductsProperty()
    {
        return ProductService::getProducibleOnes();
    }
    public function getTypesProperty()
    {
        return [
            'manual',
            'production_ingredient',
            'production_total',
            'production_waste',
            'dispatch_total',
        ];
    }

}
