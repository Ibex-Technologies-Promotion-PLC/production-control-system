<?php

namespace App\Http\Livewire;

trait Refresh
{
    protected function refresh()
    {
        $this->dispatch('refresh')->self();
    }
    
}