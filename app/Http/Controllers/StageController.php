<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StageController extends Controller
{
    public function desk()
    {
    	$list=\DB::table("types")->get();

    	return view("/web",["list"=>$list]);
    }
}
