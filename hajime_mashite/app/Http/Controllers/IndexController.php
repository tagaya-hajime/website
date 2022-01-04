<?php

namespace App\Http\Controllers;




use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $data_skill = DB::select('select * from skills');




        return view('index', compact('data_skill'));
        
    }
}

