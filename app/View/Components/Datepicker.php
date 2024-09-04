<?php

namespace App\View\Components;

use Carbon\Carbon;
use Illuminate\View\Component;

class Datepicker extends Component
{
    public $model;
    public $label;
    public $placeholder;
    public $type; // datetime, date, time, month, or year
    public $disabledDays;
    public $initialDate;
    public $dId;

    /**
     * Create a new component instance.
     *
     * @param string $model
     * @param string|null $placeholder
     * @param string|null $label
     * @param string $type
     * @param array|null $disabledDays
     * @param string|null $initialDate
     * @param string|null $uniqueKey
     * @param string|null $dId
     * @return void
     */
    public function __construct(
        $model,
        $placeholder = 'common.date',
        $label = null,
        $type = 'date',
        $disabledDays = null,
        $initialDate = null,
        $uniqueKey = null,
        $dId = null
    ) {
        $this->model = $model;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->disabledDays = $disabledDays;

        // Handle null or unparsable initialDate gracefully
        $this->initialDate = $this->parseDate($initialDate);

        // Ensure a unique identifier is set for dId
        $this->dId = $dId ?: 'datepicker_' . ($uniqueKey ?? uniqid());
    }

    /**
     * Parse the date or set a fallback.
     *
     * @param string|null $date
     * @return string
     */
    private function parseDate($date)
    {
        // Try parsing the date, default to today's date if parsing fails
        try {
            return $date ? Carbon::parse($date)->format('Y-m-d') : Carbon::now()->format('Y-m-d');
        } catch (\Exception $e) {
            return Carbon::now()->format('Y-m-d');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.datepicker');
    }
}
