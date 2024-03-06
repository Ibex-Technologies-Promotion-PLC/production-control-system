<?php

namespace App\Http\Livewire\Companies;

use App\Http\Livewire\FormHelpers;
use App\Models\Company;
use Livewire\Component;

class Form extends Component
{

    use FormHelpers;

    public $cmp_name;
    public $cmp_note;
    public $cmp_phone;

    public $cmp_supplier = false;
    public $cmp_customer = false;

    public $company = false;
    public $editMode = false;


    public function rules()
    {
        return [
            'cmp_name' => 'required|unique:companies,cmp_name,' . optional($this->company)->id,
            'cmp_phone' => 'nullable|digits_between:10,14|unique:companies,cmp_phone,' . optional($this->company)->id,
            'cmp_note' => 'nullable',

            'cmp_supplier' => 'nullable',
            'cmp_customer' => 'nullable',
        ];
    }


    public function mount($company = null)
    {
        if($company) {
            $this->editMode = true;
            $this->setEditMode($company);
        }
    }

    
    public function submit()
    {
        $validatedData = $this->validate();

        if($this->editMode && $this->company) {
            $this->company->update($validatedData);
            // $this->emit('toast','', __('companies.company_info_updated'), 'success');
            session()->flash('success', __('companies.company_info_updated'));
            return redirect()->route('companies.index');
        } else {
            Company::create($validatedData);
            session()->flash('success', __('companies.company_defined'));
            return redirect()->route('companies.index');
        }
    }


    public function setEditMode($company)
    {
        $this->cmp_name = $company->cmp_name;
        
        $this->cmp_note = $company->cmp_note;
        $this->cmp_phone = $company->cmp_phone;
        $this->cmp_supplier = $company->cmp_supplier;
        $this->cmp_customer = $company->cmp_customer;
    }

    public function render()
    {
        return view('livewire.companies.form');
    }
}
