<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postoffice;
use App\Area;
use App\Villag;
use App\Lane;
use App\Connection;
use App\Beneficiarie;
use Illuminate\Support\Facades\DB;


class ConnectionController extends Controller
{
    public function connection(Request $req){
        return view('dashboard')->with("name","connection")->with('displayname',"Connection")->with('connid',$req->id);
    }
    public function newconnection(Request $req){
        return view('dashboard')->with("name","newconnection")->with('displayname',"New Connections");
    }
    public function getArea(Request $req){
        $poffice_id = $req->id;
        $item = Area::all()->where('postofice_id',$poffice_id); 
        return response()->json(['item'=>$item]);
    }
    public function getVillage(Request $req){
        $area_id = $req->id;
        $item = Villag::all()->where('area_id',$area_id); 
        return response()->json(['item'=>$item]);
    }
    public function getlane(Request $req){
        $village_id = $req->id;
        $item = Lane::all()->where('village_id',$village_id); 
        return response()->json(['item'=>$item]);
    }
    public function addconnection(Request $req){
        $consumer_id = $req->id;
        return view('dashboard')->with("name","addconnection")->with('displayname',"Add Connection")->with("consumerid",$consumer_id);
    }
    public function addnewconnection(Request $req){
        $consumer_id = $req->id;
        $connection = new Connection;

        $connection->billtype = $req->cbill;
        $connection->phone1 = $req->cphone1;
        $connection->phone2 = $req->cphone2;

        $connection->phonefix = $req->cphonefix;
        $connection->postoffice_id = $req->cpoffice;
        $connection->area_id = $req->carea;
       
        $connection->village_id	 = $req->cvillage;
        $connection->lane_id = $req->clane;
        $connection->house_num = $req->chnumber;
        $connection->house_name = $req->chname;
        $connection->valve_id = $req->valvename;
        $connection->gn_id = $req->gnid;
        $connection->billzone_id = $req->billid;

        $connection->premiss_num = $req->chprnumber;

        if (Connection::where('premiss_num', '=', $req->chprnumber)->exists()) {
            $allaffect = Connection::all()->where("premiss_num",">=",$req->chprnumber);
            $premnum = $req->chprnumber;
            foreach($allaffect as $aff){
                $premnum++;
                $conn = Connection::find($aff->id);
                $premiss_num = $conn->premiss_num;
                $premiss_num++;
                $conn->update([
                    'premiss_num' => $premiss_num
                ]);
            }
        }
        
        $connection->num_of_benif = $req->cnumofbef;
        $connection->connection_def = $req->defcon;
        $connection->consumer_id = $consumer_id;

        $connection->save();
        return redirect()->back();
    }
    public function addbeneficiaries(Request $req){
        $conection_id = $req->id;
        return view('dashboard')->with("name","addbeneficiaries")->with('displayname',"Add Beneficiaries")->with("connid",$conection_id);
    }

    public function addnewbenif(Request $req){
        $conection_id = $req->id;
        $benif = new Beneficiarie;
        $benif->relationship = $req->brel;
        $benif->name = $req->bname;
        $benif->nic = $req->bnic;
        $benif->phone = $req->bphone;
        $benif->conn_id = $conection_id;
        $benif->save();
        return redirect()->back()->withErrors(["Successfully Added"]);
    }
    
    
}
