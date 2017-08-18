@extends('layouts.app')

@section('content')
<hr>    
<h2 class="text-center">{{$count}}</h2>
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Orders</th>
                    @if(Auth::user()->roles=='admin')
                        <th>User</th>
                    @endif
                    <th>Price</th>
                    <th>Tax Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>
                    @foreach($order->carts as $cart)
                        <li>
                            <a href="{{route('dish.show', $cart->dish->id)}}">
                            {{$cart->dish->title}}
                            </a>
                        </li>   
                    @endforeach
                    </td>
                    @if(Auth::user()->roles=='admin')
                        <td>
                            <a href="{{route('user.show', $order->user->id)}}">
                                {{$order->user->name}}
                            </a>
                        </td>
                    @endif
                    <td>{{$order->price}}</td>
                    <td>{{$order->tax}}</td>
                    <td>{{$order->created_at}}</td>
                    <td>
                    @component('component.delete',[
                                    'route'=>'order',
                                    'id'=>$order->id,
                                    'name'=>'Remove order'])
                                    @endcomponent
                    @endforeach
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
@endsection
