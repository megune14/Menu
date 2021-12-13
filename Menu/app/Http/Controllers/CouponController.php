<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;


class CouponController extends Controller
{
    public function index(Request $request){
        $items = DB::select ('select * from coupon');
        return view('CouponSetting.index',['items => $items']);

    }

    public function post(Request $request){
        $items = DB::select ('select * from coupon');
        return view('CouponSetting.index',['items => $items']);
    }


     public function add(Request $request)
    {

        return view('CouponSetting.add');
    }

    public function create(Request $request)
    {

        //$param = [
        //    'name' => $request->name,
        //    'point' => $request->point,
        //];
        //DB::insert('insert into coupon(name, point) values (:name, :point)',$param);
        //return redirect('/CouponSetting');
      //$this->validate($request,Coupon::$rules);
      $coupon = new Coupon;
      $form = $request->all();
      unset($form['token']);
      $coupon->fill($form)->save();
      return redirect('/CouponSetting');

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coupon $coupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(coupon $coupon)
    {
        //
    }
}
