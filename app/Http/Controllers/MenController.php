<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MenController extends Controller
{
    public function index(Request $request)
    {
    	$did = $request->did;
    	// return 222;
    	$men = \DB::table('men')->where('gid',$did)->first()->sex;
    	// alert('json_encode()');

    	return $men;
    	// return '1';

    }
     public function women(Request $request)
    {
    	$did = $request->did;
    	// return 222;
    	$women = \DB::table('women')->where('gid',$did)->first()->sex;
    	// alert('json_encode()');

    	return $women;
    	// return '1';

    }
}
