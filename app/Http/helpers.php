<?php
//we add only global functions to helpers
    namespace App\Http;

    use App\Cart;
    use App\Item;
    use Ap\Order;

    class Helpers {
        public static function cartCount($token)
    {
        // $token =$request->session()->get('_token');
        $cart_size=Cart::where('token',$token)->whereNull('orderId')->count();
        return $cart_size;
    }
    // we need to improve this
    public static function cartSum($token){
    	$carts=cart::where('token', $token)->whereNull('orderId')->get();
    	$price=0;
    	foreach($carts as $cart){
    		$item=Item::where('id',$cart->itemId)->first();
    		$price=$price+$item->price;
    		$cart->price=$item->price;
    	}//bus keiciamas i inner join
    	return number_format($price,2);
    }
    public static function tax($price){
        return round($price*1.21,2)-$price;
    }
    public static function cartSumTaxed($price){
        return round($price*1.21,2);
    }
}