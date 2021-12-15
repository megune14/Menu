<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shops;

class ShopsController extends Controller
{
    //

    public function store() {
		$md = new shops();
		$data = $md->get();
		return view('html/shop.StoreInfoDetail',['data' => $data]);
	}
    public function setting() {
  		$md = new shops();
  		$data = $md->get();
  		return view('html/shop.StoreInfoSettings',['data' => $data]);
	}
}

/*public function store(Request $request){
    $StoreName = '涅槃会店';
    $adress = '茨城県水戸市1325';
    $TelephonNumber = '029-288-4950';
    $Email = 'tenpogawa@dev.co.jp';

    return view('html/user.OrderList', ['id' => $date],);*/


