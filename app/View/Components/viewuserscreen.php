<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\User;
use App\project;


class viewuserscreen extends Component
{
    public $userid;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($userid)
    {
        $this->userid = $userid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        // print_r(project::find(User::find($this->userid)->get("project_id"))[0]->name);
        return view('components.viewuserscreen')
        ->with("user",User::find($this->userid))
        ->with('projectName',project::find(User::find($this->userid)->get("project_id"))[0]->name);
    }
}
