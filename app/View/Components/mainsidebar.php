<?php

namespace App\View\Components;

use Illuminate\View\Component;

class mainsidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $currentroute;

    public function __construct($currentroute)
    {
        $this->currentroute = $currentroute;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.mainsidebar')->with("currentroute",$this->currentroute);
    }
}
