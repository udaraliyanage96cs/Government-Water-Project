<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\UserPermission;
use App\UserRoll;


class permissionsscren extends Component
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
        $list_of_permissions = \Schema::getColumnListing('user_permissions');
        return view('components.permissionsscren')
        ->with('UserPermission',$list_of_permissions)
        ->with('UserRoll',UserRoll::all())
        ->with('resount',count($list_of_permissions))
        ->with('resrows',count(UserRoll::all()));
    }
}
