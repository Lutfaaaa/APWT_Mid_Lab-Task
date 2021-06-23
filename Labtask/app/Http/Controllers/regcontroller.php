<?php

namespace App\Http\Controllers;
namespace App\Http\Requests;
namespace App\Models;

use Illuminate\Http\Request;

class regcontroller extends Controller
{
    public function registration(){
        return view ("login.Registration");
    }

    public function verify(regrequest $req){
        $user = new user;
        $user->Full_name = $req->fname;
        $user->user_name = $req->uname;
        $user->Email = $req->email;
        $user->password =  md5($req->password);
        $user->Confirm_password =  md5($req->cpassword);
        $user->company_name = $req->address;
        $user->Address = $req->cname;
        $user->city = $req->city;
        $user->country = $req->country;
        $user->save();
        return redirect("login.login");

    }
}
