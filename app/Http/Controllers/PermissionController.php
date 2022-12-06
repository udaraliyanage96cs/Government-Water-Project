<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserRoll;

class PermissionController extends Controller
{
    public function adduserpermissions(Request $req){
        $rolls = new UserRoll;
        $rolls->roll_name = $req->pname;
        $rolls->save();
        return redirect()->back();
    }
}
