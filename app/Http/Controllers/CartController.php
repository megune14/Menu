<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\User;
use App\Models\OrderTable;
use App\Models\OrderDetailTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function add(Request $request){
        $itemInCart = Cart::where('user_id',Auth::id())->where('commodity_table_CommodityID',$request->commodity_id)->first();

        if($itemInCart){
            $itemInCart->quantity += $request->quantity;
            $itemInCart->save();
        }else{
            Cart::create([
                'user_id' => Auth::id(),
                'commodity_table_CommodityID' => $request->commodity_id,
                'quantity'=> $request->quantity
            ]);
        }
       return redirect()->route('user.cart.index');

    }
    public function index(){
        $user = User::findOrFail(Auth::id());
        $products = $user->commoditys;
        $totalPrice=0;
        foreach($products as $product){
            $totalPrice += $product->Price * $product->pivot->quantity;
        }
        return view('user/html.OrderList',compact('products','totalPrice'));
    }

    public function delete($id){
        Cart::where('commodity_table_CommodityID',$id)->where('user_id',Auth::id())->delete();
        return redirect()->route('user.cart.index');
    }

    public function push(){
        $user = User::findOrFail(Auth::id());
        $carts = $user->commoditys;
        $order = OrderTable::create([
            'DayTime' => date('Y/m/d/'),
            'UserID' => Auth::id(),
            'StoreID' => session()->get('StoreID'),
            'TableNumber' => 101,
        ]);
        foreach($carts as $cart){
            OrderDetailTable::create([
                'order_table_OrderID' => $order->id,
                'CommodityID' => $cart->CommodityID,
                'Quantity' =>$cart->pivot->quantity,
            ]);
        }
        Cart::where('user_id',Auth::id())->delete();
        return redirect()->route('user.category');
    }


}
