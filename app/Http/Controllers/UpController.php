<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpController extends Controller
{
    public function mod ($id) 
    {  
        $rec = DB::select(
            DB::raw("SELECT id, email, password from calendriers WHERE id = :id"),
            array('id' => $id)
        );
        

        $recs= ['rec'=>$rec];
        
   
    
    return view('salons.up', $recs);
        
    }
    public function fin (Request $request, $id) {

$rec = DB::select(
    DB::raw("UPDATE calendriers
    SET email = :email ,
    password = :password
    WHERE id = :id"),
    array('id' =>$id,
    'password' => $request->password,
    'email' => $request->email)
);

$cal = DB::select(
    DB::raw("SELECT * from calendriers"),
   
);


$cals= ['cal'=>$cal];


return view('salons.liste', $cals);
    }
}
