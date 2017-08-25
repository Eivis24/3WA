<?php

namespace App\Http\Controllers;

use App\Order;
use App\Cart;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       private static function count($userEmail)
    {
        if (Auth::user()->role=='admin'){
            $order_count=Order::all()->count();
        }
        else{
            $order_count=Order::where('userEmail',$userEmail)->count();
        }
        return $order_count;
    }
    public function index()
    {
            $id=Auth::user()->id;
        if (Auth::user()->role=='admin'){
            $orders=Order::orderBy('created_at','desc')->get();
        }
        else{
            $orders=Order::where('userEmail',$id)->get();
            }
            foreach($orders as $order){
                $order->carts=Cart::where('orderId',$order->id)->get();//gauname item id
                    foreach ($order->carts as $cart) {
                        $cart->item=Item::where('id',$cart->itemId)->first();
                    }
            }
            $count=$this->count($id);
            // dd($orders);
            return view('orders.index', compact('orders','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd ($request);
        $order = new Order;
        $order->userEmail=$request->userEmail;
        $order->price=$request->price;
        $order->tax=$request->tax;
        $order -> save();
        // dd($order->id);
        $carts = Cart::where('token', $request->_token)->whereNull('orderId');
        $carts->update(['orderId'=>$order->id]);//update
        // dd($carts);
        $request->session()-> flash('success','Your order has been complete. Wait for admin approval');
        return redirect()->route('item.index');
        // return redirect()->route('order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order=order::find($order->id);
        if($order){    //tikrina ar order nera tuscias(protection)
            $order->delete();
        }
        return redirect()->route('order.index');
    }
}
