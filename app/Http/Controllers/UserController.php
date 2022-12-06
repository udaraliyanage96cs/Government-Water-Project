<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;

class UserController extends Controller
{
    public function login(Request $req){
        $userdata = array(
            'email'     => $req->email,
            'password'  => $req->password
        );
        if (Auth::attempt($userdata)) {
            return redirect("/dashboard");
        } else {        
            return redirect("/");
        }
    }

    public function attachuser(Request $req){
        $project_id = $req->id;
        return view('dashboard')->with("name","attach_user")->with('displayname',"Attach user")->with("project_id",$project_id);
    }
    public function addahuser(Request $req){
        $project_id = $req->id;

        $fileName = '';
        if(isset($req->file)){
            $fileName = time().'.'.$req->file->extension();  
            $path = "uploads/dp/".$project_id;
            $req->file->move(public_path($path), $fileName);
        }else{
            $fileName = '';
        }

        $user = new User;
        $user->salutation = $req->usalutation;
        $user->name = $req->uname;
        $user->username = $req->uusersname;

        $user->propic = $fileName;


        $user->job = $req->ujob;
        $user->email  = $req->uemail;
        $user->nic  = $req->unic;
        $user->phone1 = $req->uphone1;
        $user->phone2 = $req->uphone2;
        $user->phonefixed = $req->uphonefixed;
        $user->password = Hash::make($req->upassword);
        $user->address = $req->uaddress;
        $user->user_roll_id = $req->uuseroll;
        $user->project_id = $project_id;
        $user->save();
        return redirect('/viewproject/'.$project_id);
    }
    public function viewuser(Request $req){
        $user_id = $req->id;
        return view('dashboard')->with("name","viewuser")->with('displayname',"View User")->with("user_id",$user_id);
    }
}
