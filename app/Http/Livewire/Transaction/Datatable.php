<?php

namespace App\Http\Livewire\Transaction;

use App\Models\Setting;
use App\Models\Transaction;
use Livewire\Component;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;

    public $perPage;
    public $showDateFilters = false;
    public $transactionData;
    public $orderByColumn = '';



    public function mount()
    {
        $this->perPage = $this->getDatatablePerpage();
        $this->transactionData = Transaction::with(['product','company'])->get();
        // dd($this->transactionData);
    }
    public function getDatatablePerpage($default = 30): int
    {
        $result = Setting::where(['user_id' => auth()->user()->id, 'name' => 'datatable_perpage'])->first();

        return $result
            ? (int)abs($result->value)
            : $default;
    }
    public function getDirectionClass($column)
    {
        if($this->orderByColumn === $column && $this->direction === 'asc') {
            return 'small green sort up';
        } elseif($this->orderByColumn === $column && $this->direction === 'desc') {
            return 'small red sort down';
        } else {
            return 'small orange sort';
        }
    }
    public function render()
    {
        return view('livewire.transaction.datatable');
    }
}
