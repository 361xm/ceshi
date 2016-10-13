<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TypeListController extends Controller
{
	public function index($id)
	{
		return "查看".$id;
	}
}