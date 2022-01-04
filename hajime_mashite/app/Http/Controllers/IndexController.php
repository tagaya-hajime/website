<?php

namespace App\Http\Controllers;




use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(){
        $data_skill = DB::select('select * from skills');
        $data_portfolio = DB::select('select * from portfolios');




        return view('index', compact('data_skill','data_portfolio'));
        
    }
}

