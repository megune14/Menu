<?php

namespace App\Http\Controllers;

use App\Models\CouponTable;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;


class CouponController extends Controller
{
   //public function index(Request $request){
   //    $items = DB::select ('select * from coupon');
   //    return view('CouponSetting.index',['items => $items']);

   //}

   //public function post(Request $request){
   //    $items = DB::select ('select * from coupon');
   //    return view('CouponSetting.index',['items => $items']);
   //}


    // public function add(Request $request)
    //{
//
    //    return view('CouponSetting.add');
    //}
//
    public function create(Request $request)
    {

        //$param = [
        //    'name' => $request->name,
        //    'point' => $request->point,
        //];
        //DB::insert('insert into coupon(name, point) values (:name, :point)',$param);
        //return redirect('/CouponSetting');
      //$this->validate($request,Coupon::$rules);
      $coupon = new CouponTable;
      $form = $request->all();
      unset($form['token']);
      $coupon->fill($form)->save();
      return redirect('/admin/CouponProduct');

    }

    public function detail() {
        $md = new CouponTable();
        $data = $md->where('id'())->first();
        return view('admin/html.CouponDetail',['data' => $data]);
  }
   
   public function delete(Request $request) {
    $companies = new Companies;
    $companies->fill( $request->all() ); 
    $companies->save(); 
    coupontable::find($request->id)->delete();
    return redirect('admin/html.CouponDetail');
    /**return view('StoreCouponList.del',['form => $coupon']); */
}
//強制
   // public function del(Request $request){
   //     $param=['id'=> $request->id];
   //     $item = DB::select('select * from Coupons where id = :id', $param);
   //     return view('StoreCouponList.del',['form' => $item[0]]);
   // }
//





    public function remove(Request $request)
    {
        CouponTable::find($request->id)->delete();
        return redirect('/admin/StoreCouponList');

       //もう一個のほう
     //$param = ['id'=> $request->id];
      //DB::delete('delete * from Coupons where id = :id', $param);
     // return redirect('/StoreCouponList');


 }
//
   public function softDeletes($column = 'deleted_at', $precision = 0)
   {
        return $this->timestamp($column, $precision)->nullable();
    }




    public function edit(Request $request)
    {
        $param = ['id' => $request->id];
        $item = DB::select('select *  from coupons where id = :id',$param);
        return view('CouponSetting.edit',['form' => $item[0]]);
    }

    public function update(Request $request)
    {
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'point' => $request->point,


        ];
        DB::update('update coupons set name = :name, point = :point where id = :id', $param);
        return redirect('/admin/CouponSetting');
    }

















    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function index()
   // {
        //
   // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function create()
    //{
    //    //
    //}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request)
   // {
   //     //
   // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\coupon  $coupon
     * @return \Illuminate\Http\Response
     */
  //  public function show(coupon $coupon)
  //  {
  //      //
  //  }
//
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\coupon  $coupon
     * @return \Illuminate\Http\Response
     */
   // public function edit(coupon $coupon)
   // {
   //     //
   // }
//
   // /**
 //  * Update the specified resource in storage.
 //  *
 //  * @param  \Illuminate\Http\Request  $request
 //  * @param  \App\Models\coupon  $coupon
 //  * @return \Illuminate\Http\Response
 //  */
 // public function update(Request $request, coupon $coupon)
 // {
 //     //
 // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\coupon  $coupon
     * @return \Illuminate\Http\Response
     */
   // public function destroy(coupon $coupon)
   // {
   //     //
   // }
}
