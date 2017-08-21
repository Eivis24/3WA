@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @component('components.back')
            @endcomponent 

        <div class='list-group'>
            <p class="panel-heading list-group-item list-group-item-success"><b>Title: </b>{{$item->title}}</p>
            <div class="list-group-item" href="#">
                <img class="img-responsive center-block" src="{{$item->imageURL}}">
            </div>
            <p class="list-group-item height-fix"><b>Description: </b>{{($item->description)}}</p>
            <p class="list-group-item"><b>Price: </b>{{$item->price}}</p>
            <p class="list-group-item"><b>Tax: </b>{{$item->tax}}</p>
            <p class="list-group-item"><b>In Stock: </b>{{$item->inStock}}</p>
            <p class="list-group-item"><b>Last resupply: </b>{{$item->lastRecieved}}</p>
            <p class="list-group-item"><b>Price on checkout: </b>{{$item->price + $item->tax}}</p>
            @component('components.edit',[
                'route'=>'item',
                'id'=>$item->id,
                'name'=>'Edit item'])
            @endcomponent
            @component('components.delete',[
                'route'=>'item',
                'id'=>$item->id,
                'name'=>'Remove item'])
            @endcomponent
            @component('components.cart',['id'=>$item->id])) @endcomponent
        </div>
    </div>
</div>
@endsection