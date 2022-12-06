<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $req){
        return view('dashboard')->with("name","initial")->with('displayname',"Dashboard");
    }
    public function projectscreen(Request $req){
        return view('dashboard')->with("name","projectscreen")->with('displayname',"Projects");;
    }
    public function newproject(Request $req){
        return view('dashboard')->with("name","newproject")->with('displayname',"Add New Project");;
    }
    public function settings(Request $req){
        return view('dashboard')->with("name","settings")->with('displayname',"Settings");;
    }
    public function permissions(Request $req){
        return view('dashboard')->with("name","permissions")->with('displayname',"Permissions");;
    }
    
    
}
