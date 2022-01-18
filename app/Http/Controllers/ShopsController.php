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
  		return view('admin/html.StoreInfoSettings',['data' => $data]);
	}
    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'StoreName' => $request->StoreName,
            'Adress' => $request->Adress,
            'TelephoneNumber' => $request->TelephoneNumber,
            
        ];
        DB::update('update shops set StoreName = :StoreName, Adress = :Adress, TelephoneNumber = :TelephoneNumber where id = :id', $param);
        return redirect('/admin/StoreInfoSettings');
    }
    public function delete(Request $request) {
          shops::find(1)->delete();
          return redirect('auth.login');
    }
}

/*public function store(Request $request){
    $StoreName = '涅槃会店';
    $adress = '茨城県水戸市1325';
    $TelephonNumber = '029-288-4950';
    $Email = 'tenpogawa@dev.co.jp';

    return view('html/user.OrderList', ['id' => $date],);*/


