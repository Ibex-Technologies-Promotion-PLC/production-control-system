<?php

namespace App\View\Components;

use Illuminate\View\Component;



class Dropdown extends Component
{
    public $right = null;

    public $label;
    public $key;

    // input
    public $iModel;
    public $iType;
    public $iPlaceholder;

    // select
    public $sId;
    public $model;
    public $collection;
    public $dataSource;
    public $dataSourceFunction;
    public $value;
    public $text;
    public $sClass;

    public $triggerOn;
    public $triggerOnEvent;
    public $transition;
    public $clearable;
    public $placeholder;

    public $prefix;

    public $basic;
    public $initnone;

    public $noErrors;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $label = null,
        $key = null,
        $iModel = null,
        $iType = 'text',
        $iPlaceholder = null,
        $sId = null,
        $model = null, // Made optional
        $collection = null,
        $dataSource = null,
        $dataSourceFunction = null,
        $value = null, // Made optional
        $text = null, // Made optional
        $sClass = null,
        $triggerOn = false,
        $triggerOnEvent = null,
        $transition = 'slide',
        $clearable = false,
        $placeholder = null,
        $prefix = null,
        $basic = false,
        $initnone = false,
        $noErrors = false
    ) {
        $this->label = $label;
        $this->key = $key;

        $this->iModel = $iModel;
        $this->iType = $iType;

        $this->iPlaceholder = $iPlaceholder ?: $label;

        $this->sId = $sId ?: 'uniqueId' . $key;
        $this->model = $model;
        $this->collection = $collection;
        $this->dataSource = $dataSource;
        $this->dataSourceFunction = $dataSourceFunction;
        $this->value = $value;
        $this->text = $text;
        $this->sClass = $sClass;

        $this->triggerOn = $triggerOn;
        $this->triggerOnEvent = $triggerOnEvent;
        $this->transition = $transition;
        $this->clearable = $clearable;
        $this->placeholder = $placeholder ?: __('common.dropdown_placeholder');
        $this->prefix = $prefix;

        $this->basic = $basic;
        $this->initnone = $initnone;
        $this->noErrors = $noErrors;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.dropdown');
    }
}
