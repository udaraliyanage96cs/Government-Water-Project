<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;

class ProjectController extends Controller
{
    public function insert_new_project(Request $req){
        $Projcet = new project;
        $Projcet->name = $req->cname;
        $Projcet->address = $req->caddress;
        $Projcet->postal_code = $req->cpostalcode;
        $Projcet->br_number = $req->cbrnumber;
        $Projcet->phone1 = $req->cphone1;
        $Projcet->phone2 = $req->cphone2;
        $Projcet->email = $req->cemail;
        $Projcet->connection_type = $req->cconnectiontype;
        $Projcet->package = $req->cpackage;
        $Projcet->authorized_officer = $req->cauthofficer;
        $Projcet->officer_name = $req->cauthofficername;
        $Projcet->officer_nic = $req->cauthofficernic;
        $Projcet->ac_blance = $req->cacbalance;
        $Projcet->save();
        return redirect()->back();
    }
    public function viewproject(Request $req){
        return view('dashboard')->with("name","viewproject")->with('displayname',"View Project")->with("project_id",$req->id);
    }
    public function attachuser(Request $req){
        return view('dashboard')->with("name","attachuser")->with('displayname',"Attach Users");
    }
    
}
