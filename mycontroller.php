<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\member;

class mycontroller extends Controller
{
    //
    function index(Request $req){
       $member = new member;
       $member->email = $req->email;
       $member->password = $req->password;
       $member->save();
    }
}
