<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Connection;
use App\Postoffice;
use App\Billinzone;
use App\Villag;
use App\Lane;
use  App\Valve;
use App\Gndev;
use App\Beneficiarie;

class connectionscreen extends Component
{
    public $connid;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($connid)
    {
        $this->connid = $connid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        $fullconnection = Postoffice::join('connections', 'connections.postoffice_id', '=', 'postoffices.id')
        ->join('billinzones', 'billinzones.id', '=', 'connections.billzone_id')
        ->join('areas', 'areas.id', '=', 'connections.area_id')
        ->join('villags', 'villags.id', '=', 'connections.village_id')
        ->join('lanes', 'lanes.id', '=', 'connections.lane_id')
        ->join('valves', 'valves.id', '=', 'connections.valve_id')
        ->join('gndevs', 'gndevs.id', '=', 'connections.gn_id')
        ->get(['postoffices.name as pname','billinzones.name as bname','areas.name as aname','villags.name as vname','lanes.name as lname','valves.name as vlname'
        ,'gndevs.name as gnname']);

        
        return view('components.connectionscreen')
        ->with("connection",Connection::find($this->connid))
        ->with("fullconnection",$fullconnection)
        ->with('beneficiarie',Beneficiarie::all()->where('conn_id',$this->connid));
    }
}
