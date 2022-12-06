<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\UserRoll;
use App\Postoffice;
use App\Villag;
use App\Area;
use App\Lane;
use App\Project;



class settingsscreen extends Component
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

        $fullareas = Area::join('postoffices', 'postoffices.id', '=', 'areas.postofice_id')
            ->get(['postoffices.name as pname','areas.name as aname']);

        $fullvillages = Villag::join('areas', 'areas.id', '=', 'villags.area_id')
            ->join('postoffices', 'postoffices.id', '=', 'areas.postofice_id')
            ->get(['postoffices.name as pname','areas.name as aname','villags.name as vname']);

        $fulllane = Lane::join('villags', 'villags.id', '=', 'lanes.village_id')
            ->join('areas', 'areas.id', '=', 'villags.area_id')
            ->join('postoffices', 'postoffices.id', '=', 'areas.postofice_id')
            ->get(['postoffices.name as pname','areas.name as aname','villags.name as vname', 'lanes.name as lname']);
       
        return view('components.settingsscreen')
        ->with('rolls',UserRoll::all())
        ->with('postoffice',Postoffice::all())
        ->with('areas',Area::all())
        ->with('village',Villag::all())
        ->with('fullareas',$fullareas)
        ->with('fullvillages',$fullvillages)
        ->with('fulllane',$fulllane)
        ->with('projects',Project::all());

    }
}
