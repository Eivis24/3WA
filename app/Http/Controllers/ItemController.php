<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function __construct(){
        $this->middleware('admin')->except('index', 'show');
    }
    private function validateForm(Request $request){
        $this->validate($request,[
            'title'=>'required|min:5',
            'description'=>'required|max:500',
            'imageURL'=>'required',
            'price'=>'required|min:0|numeric',
            'tax'=>'required|min:0|numeric',
            'inStock'=>'required|min:0|numeric',
            ],['title.required'=>'Privaloma užpildyti']);
    }
    private function itemCall(Item $item, Request $request){
        $item->title=$request->title;
        $item->description=$request->description;
        $item->imageURL=$request->imageURL;
        $item->price=$request->price;
        $item->tax=$request->tax;
        $item->inStock=$request->inStock;
        $item -> save();
    }
    public function index()
    {
        $items=Item::all();
        return view('index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateForm($request);
        $item = new Item;
        $this->itemCall($item, $request);
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        // dd($item);
        //$item= new item;
        //$item=item::find($item->id);
        return view("item.show", ['item'=>$item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=Item::find($id);
        return view('item.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validateForm($request);
        $item=Item::find($id);
        $this->itemCall($item, $request);
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        // $item=item::where('id',$item->id)->first();
        $item=Item::find($item->id);
        if($item){    //tikrina ar item nera tuscias(protection)
            $item->delete();
        }
        return redirect()->route('item.index');
    }
}