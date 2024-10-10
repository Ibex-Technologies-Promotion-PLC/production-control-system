<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class TransactionComponent extends Component
{
    public $transactions;
    public function mount(){
        $this->transactions = Transaction::all();
        dd($this->transactions);
    }
    public function render()
    {
       

        return view('livewire.transaction');
    }
}
