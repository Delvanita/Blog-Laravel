<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Register() {
        return view('Register');
    }

    public function SelamatDatang(Request $request) {
        return view('SelamatDatang');
    }

    public function SelamatDatang_post(Request $request) {
        // dd($request->all());
        $fname = $request['fname'];
        $lname = $request['lname'];
        $fullname = $fname . " " . $lname;
        return view('SelamatDatang', ['fullname'=>$fullname]);
    }

    public function sapa(){
        return "hallo";
    }

    public function sapa_post(){
        return "YA";
    }


}
