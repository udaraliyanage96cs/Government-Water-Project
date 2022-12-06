<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Consumer;
use Auth;

class consumersscreen extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.consumersscreen')
        ->with("consumers",Consumer::all()->where('project_id',Auth::User()->project_id));
    }
}
