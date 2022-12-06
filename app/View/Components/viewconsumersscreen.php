<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Consumer;
use App\Connection;

class viewconsumersscreen extends Component
{
    public $consumerid;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($consumerid)
    {
        $this->consumerid = $consumerid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.viewconsumersscreen')
        ->with("consumer",Consumer::find($this->consumerid))
        ->with("fullconnection",Connection::all()->where("consumer_id",$this->consumerid));
    }
}
