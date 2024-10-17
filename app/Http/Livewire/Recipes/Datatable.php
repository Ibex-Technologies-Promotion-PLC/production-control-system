<?php

namespace App\Http\Livewire\Recipes;

use App\Http\Livewire\Traits\Exportable;
use App\Models\Recipe;
use App\Http\Livewire\SmartTable;
use Livewire\Component;

class Datatable extends Component
{
    use SmartTable;
    use Exportable;

    protected $alsoSearch = ['product.name'];

    protected $view = 'livewire.recipes.datatable';
    protected $model = Recipe::class;

    
}
