<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Valve;
use App\Gndev;
use App\Billinzone;
use App\Consumerprifx;
use App\Connectionprifx;

class SettingController extends Controller
{
    public function addvalve(Request $req){
        $valve = new Valve;
        $valve->name = $req->svname;
        $valve->description = $req->sdiscription;
        $valve->project_id = $req->projectid;
        $valve->save();
        return redirect()->back();
    }
    public function addgndev(Request $req){
        $devision = new Gndev;
        $devision->name = $req->sdname;
        $devision->number = $req->sdnum;
        $devision->description = $req->sddiscription;
        $devision->project_id = $req->projectid;
        $devision->save();
        return redirect()->back();
    }
    public function addbillzone(Request $req){
        $bill = new Billinzone;
        $bill->name = $req->sbname;
        $bill->description = $req->sbdiscription;
        $bill->project_id = $req->projectid;
        $bill->save();
        return redirect()->back();
    }
    public function addconsumerprefix(Request $req){
        $prix = new Consumerprifx;
        $prix->name = $req->cpref;
        $prix->key = $req->ckey;
        $prix->project_id = $req->projectid;
        $prix->save();
        return redirect()->back();
    }
    public function addconnerefix(Request $req){
        $cprix = new Connectionprifx;
        $cprix->name = $req->cpref;
        $cprix->key = $req->ckey;
        $cprix->project_id = $req->projectid;
        $cprix->save();
        return redirect()->back();
    }
}
