<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consumer;
use Auth;

class ConsumerController extends Controller
{
    public function consumers(Request $req){
        return view('dashboard')->with("name","consumers")->with('displayname',"Consumers");
    }
    public function newconsumer(Request $req){
        return view('dashboard')->with("name","newconsumer")->with('displayname',"Add Consumer");
    }
    public function addnewconsumer(Request $req){

        $fileName_profic = '';
        $dir_name = $req->cnicold;
        if(isset($req->profile)){
            $fileName_profic = time()."_pro".'.'.$req->profile->extension();  
            $path = "uploads/consumers/".$dir_name;
            $req->profile->move(public_path($path), $fileName_profic);
        }else{
            $fileName_profic = '';
        }

        $fileName_nic_f = '';
        if(isset($req->nic_f_file)){
            $fileName_nic_f = time()."_nic_f".'.'.$req->nic_f_file->extension();  
            $path = "uploads/consumers/".$dir_name;
            $req->nic_f_file->move(public_path($path), $fileName_nic_f);
        }else{
            $fileName_profic = '';
        }

         $fileName_nic_b = '';
        if(isset($req->nic_b_file)){
            $fileName_nic_b = time()."_nic_b".'.'.$req->nic_b_file->extension();  
            $path = "uploads/consumers/".$dir_name;
            $req->nic_b_file->move(public_path($path), $fileName_nic_b);
        }else{
            $fileName_nic_b = '';
        }

         $fileName_sig = '';
        if(isset($req->sig_file)){
            $fileName_sig = time()."_sig".'.'.$req->sig_file->extension();  
            $path = "uploads/consumers/".$dir_name;
            $req->sig_file->move(public_path($path), $fileName_sig);
        }else{
            $fileName_sig = '';
        }

        $consumer  = new Consumer;
        $consumer->salutation = $req->csalutation;
        $consumer->surname = $req->csurname;
        $consumer->name = $req->cname;
        $consumer->nic = $req->cnicold;
        $consumer->nic_new = $req->cnicnew;
        $consumer->propic = $fileName_profic;
        $consumer->phone = $req->cphone;
        $consumer->address = $req->caddress;
        $consumer->nic_pic_f = $fileName_nic_f;
        $consumer->nic_pic_b = $fileName_nic_b;
        $consumer->sig_pic = $fileName_sig;
        $consumer->project_id = Auth::user()->project_id;
        $consumer->save();
        $consumer_id = $consumer->id;
        return redirect()->back()->withErrors([$consumer_id]);
     //   return redirect('/consumers')->with('successmsg', 'Consumer Added Successfully')->with('conid',$consumer_id);
    }
    public function viewconsumers(Request $req){
        return view('dashboard')->with("name","viewconsumers")->with('displayname',"View Consumer")->with("consumer_id",$req->id);
    }
    public function removeconsumers(Request $req){
        $consumer = Consumer::find($req->id);
        $consumer->delete();
        
    }
    
}
