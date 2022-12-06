<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\project;
use App\User;


class attachuserscreen extends Component
{
    public $pojectid;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pojectid)
    {
        $this->pojectid = $pojectid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        
        return view('components.attachuserscreen')
        ->with('pojectid',$this->pojectid)
        ->with('pojectname',project::find($this->pojectid)->name)
        ->with('users',User::all()->where('project_id',$this->pojectid));;
    }
}
