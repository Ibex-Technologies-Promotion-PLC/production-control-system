<?php

namespace App\Http\Livewire\Transaction;

use App\Http\Livewire\SmartTable;
use App\Models\Setting;
use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;
    use SmartTable;

    public $perPage;
    public $showDateFilters = false;
    public $transactionData;
    public $orderByColumn = '';



    public function mount()
    {
        // dd($this->searchQuery);
        $this->perPage = $this->getDatatablePerpage();
        $this->transactionData = Transaction::with(relations: ['product.dispatchProducts','company'])->get();
        // dd($this->transactionData);
    }
    public function getDatatablePerpage($default = 30): int
    {
        $result = Setting::where(['user_id' => auth()->user()->id, 'name' => 'datatable_perpage'])->first();

        return $result
            ? (int)abs($result->value)
            : $default;
    }
  
    
    public function render()
    {
        return view('livewire.transaction.datatable');
    }
}
