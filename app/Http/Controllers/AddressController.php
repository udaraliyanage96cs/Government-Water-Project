<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postoffice;
use App\Area;
use App\Villag;
use App\Lane;

class AddressController extends Controller
{
    public function addpostoffice(Request $req){
        $postoffice = new Postoffice;
        $postoffice->name = $req->pname;
        $postoffice->postal_code = $req->pcode;
        $postoffice->save();
        return redirect()->back();
    }
    public function addarea(Request $req){
        $area = new Area;
        $area->name = $req->aname;
        $area->postofice_id = $req->poffice;
        $area->save();
        return redirect()->back();
    }
    public function addvillage(Request $req){
        $vill = new Villag;
        $vill->name = $req->vname;
        $vill->area_id = $req->areaid;
        $vill->save();
        return redirect()->back();
    }
    public function addlane(Request $req){
        $lane = new Lane;
        $lane->name = $req->lname;
        $lane->village_id = $req->villid;
        $lane->save();
        return redirect()->back();
    }
}

