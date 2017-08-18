@extends('layouts.app')
@section('content')
{{$price=Helpers::cartSum(csrf_token()) }}
<div class="container">
    <div class="row">
    	<hr>
    	<hr>
        @component('component.indexButton',
            ['route'=>'dish.index',
            'indexName'=>'Back to indexes'])
        @endcomponent
                @if($price>0)
        <div class="cartInfo">
            <h3>
                <strong>
                    Cart 
                </strong>
                (
                <span class="cartItems">
                    {{Helpers::cartCount(csrf_token())}}
                </span>
                )
                sub total price is 
                <span class="cartAmount label label-success">
                   {{Helpers::cartSum(csrf_token())}}
                </span>     
                with tax
                <span class="cartAmount label label-warning">
                   {{Helpers::cartSumTaxed ($price) }}
                </span>     
                tax
                <span class="cartAmount label label-danger">
                   {{Helpers::tax ($price) }}
                </span>     
            </h3>
        </div>
	    @foreach($carts as $cart)
        <div class="container">
            <div class="row">
                <div class='col-lg-block'>
                    <ul class="list-group">
                        <div class="panel-heading list-group-item list-group-item-success">
                            <b>Title: </b>
                            {{$cart->title}}
                        </div>
                        <div class="list-group-item">
                            <div class="col-lg-3 pull-left">
                                <a href="#">
                                    <img class="img-responsive" src="{{$cart->imageURL}}" >
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 pull-right">
                            <div class="list-group-item height-fix">
                                <b>Description: </b>
                                {{$cart->description}}
                            <b>Price: </b>
                            <span class="label label-success">
                                {{$cart->price}}
                            </span>
                            <div class="col-lg-1 pull-right">
                                @component('component.delete',[
                                'route'=>'cart',
                                'id'=>$cart->id,
                                'name'=>'Remove from cart'])
                                @endcomponent
                                
                            </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @if(Auth::guest()&& $price>0)
    <div class="row">
        <a href="{{route('register')}}" class="btn btn-lg btn-success btn-block">
            Register
        </a>
    </div>
    @else
    <div class="row">
        <form class="form-horizontal" method="POST" action="{{route('order.store') }}">
                {{ csrf_field() }}
                <input type="hidden" name="userId" value="{{Auth::user()->id}}">
                <input type="hidden" name="price" value="{{Helpers::cartSumTaxed ($price) }}">
                <input type="hidden" name="tax" value="{{Helpers::tax ($price) }}">
                <button class="btn btn-lg btn-success btn-block">Checkout</button>
        </form>
    </div>
    @endif
    <hr>
    @else
        <h2>Your cart is empty</h2>
        @component('component.indexButton',
        ['route'=>'dish.index',
        'indexName'=>'Back to dishes'])
        @endcomponent
    @endif
</div>
@endsection