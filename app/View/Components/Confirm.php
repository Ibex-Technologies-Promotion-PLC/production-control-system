<?php

namespace App\View\Components;

use Illuminate\View\Component;


class Confirm extends Component
{
    public $question;
    public $atConfirm;
    public $atDeny;
    public $atClose;

    public $confirm;
    public $deny;
    public $color;

    public $active;

    /**
     * Create a new component instance.
     *
     * @param string $atConfirm
     * @param string|null $atDeny
     * @param string|null $atClose
     * @param string $active
     * @param string|null $question
     * @param string $confirm
     * @param string $deny
     * @param string $color
     * @return void
     */
    public function __construct(
        $atConfirm,
        $atDeny = null,
        $atClose = null,
        $active = '', // Provide default value to avoid unresolvable dependency
        $question = null,
        $confirm = 'Ok',
        $deny = 'Cancel',
        $color = 'blue'
    ) {
        $this->question = $question;
        $this->atConfirm = $atConfirm;
        $this->atDeny = $atDeny;
        $this->atClose = $atClose;

        $this->confirm = $confirm;
        $this->deny = $deny;
        $this->color = $color;

        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.confirm');
    }
}
