<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Spatie\Activitylog\Models\Activity;

class UserCard extends Component
{

    public $user;
    public $lastActivity;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
        $this->lastActivity = Activity::where('causer_id', $user->id)
            ->where('causer_type', get_class($user))
            ->latest()
            ->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.user-card');
    }
}
