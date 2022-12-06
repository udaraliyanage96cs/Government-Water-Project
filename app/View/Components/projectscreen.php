<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\project;
use Auth;

class projectscreen extends Component
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
        $projects = "";
        $project_count =  "";

        if(Auth::User()->project_id == 0){
            $projects = project::all();
            $project_count = count(project::all());
        }else{
            $projects = project::find(Auth::User()->project_id);
            $project_count = 1;
        }
        return view('components.projectscreen')
        ->with("project_count",$project_count)
        ->with("projects", $projects );
    }
}
