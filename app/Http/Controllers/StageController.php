<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StageController extends Controller
{
    public function desk()
    {
    	// $list = \DB::select('select *,(select goodsname from goods as t2 where t2.tid=t1.id) as goodsname,(select goodsprice from goods as t3 where t3.tid=t1.id) as t4,(select goodsimage from goods as t5 where t5.tid=t1.id) as goodsimage from types as t1');
    	$list = \DB::select("select *,concat(path,'-',id) as npath from types order by npath");
    	// dd($list);
    	return view("/web",["list"=>$list]);
    }
}
