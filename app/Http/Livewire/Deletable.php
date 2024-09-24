<?php

namespace App\Http\Livewire;


trait Deletable
{

    public $deleteModal = false;
    public $subjectId;

    public function delete($subjectId)
    {
        $this->deleteModal = true;
        $this->subjectId = $subjectId;
    }


    public function confirmDelete()
    {
        if(!$this->subjectId) return;

        if($this->model::findAndDelete($this->subjectId)) {
            $this->dispatch('toast', '', __('common.context_deleted'), 'info');
        } else {
            $this->dispatch('toast', '', __('common.error.body'), 'error');
        }
        
        $this->reset('subjectId', 'deleteModal');
    }

}