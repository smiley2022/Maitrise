<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CalendrierController extends Controller
{
    public function date () {

        return view('salons.calendrier');
    }

    public function store (Request $request){

         $maison = DB::select(
            DB::raw("INSERT INTO calendriers (email, password)
             VALUES (:email,:password)"),
            array(
                'email'=> $request->email,
                'password'=>$request->password
            ));
        
            $cal = DB::select(
                DB::raw(" SELECT * from calendriers")

                
            );
            $cals= ['cal'=>$cal];
        
        
        return view('salons.liste', $cals);
    // }
}
}