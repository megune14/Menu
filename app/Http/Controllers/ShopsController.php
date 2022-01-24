<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ShopsController extends Controller
{
    //

    public function store() {
		$md = new Admin();
		$data = $md->where('id',Auth::id())->first();
		return view('admin/html.StoreInfoDetail',['data' => $data]);
	}
    public function setting() {
  		$md = new Admin();
  		$data = $md->where('id',Auth::id())->first();
  		return view('admin/html.StoreInfoSettings',['data' => $data]);
	}
    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select *  from admins where id = :id',$param);
        return view('StoreInfoSettings.edit',['form' => $item[0]]);
    }
    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'shopname' => $request->shopname,
            'address' => $request->address,
            'tell' => $request->tell,
            
        ];
        DB::update('update admins set shopname = :shopname, address = :address, tell = :tell where id = :id', $param);
        return redirect('/admin/StoreInfoSettings');
    }
    public function delete(Request $request) {
          admin::find(Auth::id())->delete();
          return redirect('admin/login');
    }
}

/*public function store(Request $request){
    $StoreName = '涅槃会店';
    $adress = '茨城県水戸市1325';
    $TelephonNumber = '029-288-4950';
    $Email = 'tenpogawa@dev.co.jp';

    return view('html/user.OrderList', ['id' => $date],);*/


