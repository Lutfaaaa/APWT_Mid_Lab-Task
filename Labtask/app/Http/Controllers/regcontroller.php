<?php

namespace App\Http\Controllers;
use App\Http\Requests\regrequest;
use App\Models\usermodel;

use Illuminate\Http\Request;

class regController extends Controller
{
    public function registration(){
        return view ("login.Registration");
    }

    public function verify(regrequest $req){
        $user = new usermodel;
        $user->full_name = $req->fname;
        $user->user_name = $req->uname;
        $user->email = $req->email;
        $user->password =  md5($req->password);
        $user->confirm_password =  md5($req->cpassword);
        $user->address = $req->address;
        $user->company_name = $req->cname;
        $user->phone_number = $req->pnumber;
        $user->city = $req->city;
        $user->country = $req->country;
        $user->save();
        return redirect("login.login");

    }
}

