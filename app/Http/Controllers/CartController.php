<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function add(Request $request){
        $itemInCart = Cart::where('user_id',Auth::id())->where('commodity_id')->first();

        if($itemInCart){
            $itemInCart->quantity += $request->quantity;
            $itemInCart->save();
        }else{
            Cart::create([
                'user_id' => Auth::id(),
                'commodity_id' => $request->commodity_id,
                'quantity'=> $request->quantity
            ]);
        }
        return redirect()->route('user.cart.index');

    }
}
