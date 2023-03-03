<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\member;


class StudentController extends Controller
{
    //
    

    public function index(){
        return view('index');
    }
    public function store(Request $request){
       $this->validate($request,[
        'email'=>'required',
        'password'=>'required'
       ]);
       $member = new member([
        'email'=>$request->get('email'),
        'password'=>$request->get('password')
       ]);
       $member->save();
        
    }
}
