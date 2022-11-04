<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ListeController extends Controller
{
    public function aff () {


        $cal = DB::select(
            DB::raw(" SELECT * from calendriers")

            
        );
        $cals= ['cal'=>$cal];
    
    
    return view('salons.liste', $cals);
// }

      

    }
}
