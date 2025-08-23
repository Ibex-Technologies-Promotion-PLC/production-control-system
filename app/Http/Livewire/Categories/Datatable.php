<?php

namespace App\Http\Livewire\Categories;

use App\Http\Livewire\SmartTable;
use App\Http\Livewire\Traits\Exportable;
use App\Models\Category;
use Livewire\Component;

class Datatable extends Component
{
    use SmartTable;
    use Exportable;

    public $model = Category::class;
    public $view = 'livewire.categories.datatable';

    public function render()
    {
        $data = $this->filteredQuery()->paginate($this->perPage);
        return view($this->view, ['data' => $data]);
    }
}
