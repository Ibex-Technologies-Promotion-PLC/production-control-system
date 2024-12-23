<?php

namespace App\Http\Livewire\WorkOrders;

use \Illuminate\Support\Str;
use App\Models\Product;
use App\Models\WorkOrder;
use App\View\Components\Dropdown;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Form extends Component
{

    // workorder attributes
    public $product_id;
    public $unit_id;
    public $wo_code;
    public $wo_lot_no;
    public $wo_amount;
    public $wo_datetime;
    public $wo_queue;
    public $wo_status = 'active';
    public $wo_note;
    
    // comes from dropdown
    public $selectedProduct;

    public $units = [];

    // edit mode
    public $editMode = false;
    public $workOrder;

    public $deleteModal = false;

    protected $rules = [
        'product_id' => 'required|min:1',
        'unit_id' => 'required|min:1',
        'wo_code' => 'required|integer|min:0', // iş emri no
        'wo_lot_no' => 'required',
        'wo_amount' => 'required|numeric|min:0.1',
        'wo_datetime' => 'required|date',
        'wo_queue' => 'required|int|min:0',
        'wo_status' => 'required|max:15',
        'wo_note' => 'nullable',
    ];


    public function mount($workOrder = null) 
    {
        if($workOrder) {
            $this->setEditMode($workOrder);
        } else {
            $this->wo_datetime = Carbon::tomorrow()->format('d.m.Y');
            $this->fillInputs();
        }
    }


    public function suggestLotCode()
    {

        $this->wo_lot_no = 'LOT_' . strtoupper(Str::random(6));
    }

    public function suggestWorkOrderNoCode()
    {

        $this->wo_code = rand(100000,999999);
    }


    public function suggestChargeNoCode()
    {

        $this->wo_queue = rand(100000,999999);
    }

    public function updatingProductId($id)
    {
        if($this->editMode) return;

        $this->reset();
        $this->selectedProduct = Product::find($id);

        $this->units = $this->selectedProduct->units->toArray();

        $this->guessFields($this->selectedProduct); // !! kullanıcı ayarlarına kaydedilecek, tahmin istenmeyebilir
        $baseUnit = $this->selectedProduct->units->firstWhere('is_base', 1); 


        $this->unit_id = $baseUnit->id; // !! bununla if else ilişkisine girecek

        $this->fillInputs();
        $this->dispatch('woProductChanged'); // fill the units
    }

    

    public function getProductsProperty()
    {
        return Product::hasRecipe()->get()->toArray();
    }
    

    public function submit()
    {
        $data = $this->validate();

        if($this->editMode && $this->workOrder) {
            $workOrder = $this->workOrder->update($data);
            // $workOrder->reservedStocks()->delete();
            
            $this->dispatch('toast', '', __('common.saved.changes'), 'success');
            $this->redirect('/work-orders/daily');
        } else {
            $workOrder = WorkOrder::create($data);
            $this->dispatch('toast', '', __('workorders.workorder_saved_successfully'), 'success');
            $this->dispatch('new_work_order_created');
            $this->reset();
        } 
        $this->redirect('/work-orders/daily');


    }

    public function openDeleteModal()
    {
        if($this->editMode)
            $this->deleteModal = true;
    }

    public function confirmDelete()
    {
        if($this->editMode && $this->workOrder) {
            $this->workOrder->delete();
            return redirect()->route('work-orders.index');
        }
    }
    public function updatedDeleteModal($bool)
    {
        !$bool ? $this->deleteModal = false : null;
    }

    


    /**
     * Sets the attributes for editing
     */
    public function setEditMode($workOrder)
    {
        $this->editMode = true;
        $this->workOrder = $workOrder;
        $this->selectedProduct = $workOrder->product;

        $this->product_id = $workOrder->product_id;
        $this->wo_lot_no = $workOrder->wo_lot_no;
        $this->wo_amount = $workOrder->wo_amount;
        $this->wo_datetime = $workOrder->wo_datetime;
        $this->wo_code = $workOrder->wo_code;
        $this->wo_queue = $workOrder->wo_queue;
        $this->unit_id = $workOrder->unit_id;
        $this->wo_status = $workOrder->wo_status;
        $this->wo_note = $workOrder->wo_note;
    }

    public function suspend()
    {
        if($this->editMode && $this->workOrder->suspend())  {
            $this->dispatch('toast', '', __('workorders.wo_suspended'), 'info');
        }
    }

    public function unsuspend()
    {
        if($this->editMode) {
            $this->workOrder->unsuspend();
            $this->dispatch('toast', '', __('workorders.wo_unsuspended'), 'success');
        }
    }



    public function productSelected()
    {
        return ! empty($this->product_id);
    }

    /**
     * If recipe content is empty 
     */
    public function redirectForAddIngredients()
    {
        return redirect()->route('recipes.edit', ['recipe' => $this->selectedProduct->recipe]);
    }

    

    public function guessFields($product)
    {
        $latestWO = $product->getLastCreatedWorkOrder();
        $usualWo = WorkOrder::latest()->first();

        if($latestWO) {
            if(is_numeric($latestWO->wo_lot_no)) {
                $this->wo_lot_no = $latestWO->wo_lot_no + 1;
            }
    
            $this->wo_amount = $latestWO->wo_amount;
            $this->unit_id = $latestWO->unit_id;
        }
        
        $this->wo_datetime = now();

        if($usualWo) {
            $this->wo_queue = $usualWo->wo_queue + 1;
            $this->wo_code = $usualWo->wo_code;
        }
    }

    public function fillInputs(){
        $this->suggestLotCode();
        $this->suggestWorkOrderNoCode();
        $this->suggestChargeNoCode();
    }


    public function render()
    {
        return view('livewire.work-orders.form');
    }


}
