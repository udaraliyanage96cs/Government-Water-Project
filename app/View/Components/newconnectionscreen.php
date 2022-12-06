<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Postoffice;
use App\Area;
use App\Villag;
use App\Lane;
use  App\Valve;
use App\Gndev;
use App\Billinzone;
use Auth;

class newconnectionscreen extends Component
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
        return view('components.newconnectionscreen')
        ->with('poffice',Postoffice::all())
        ->with('areas',Area::all())
        ->with('vilages',Villag::all())
        ->with('lanes',Lane::all())
        ->with('valves',Valve::all()->where("project_id",Auth::User()->project_id))
        ->with('divisions',Gndev::all()->where("project_id",Auth::User()->project_id))
        ->with('zones',Billinzone::all()->where("project_id",Auth::User()->project_id))
        ->with('consumerid',$this->consumerid);
    }
}
