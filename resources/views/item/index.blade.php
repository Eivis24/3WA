@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
<a 
    href="{{ route('item.index') }}"
    class="itemButton btn btn-success col-lg-3">
    Items
</a>
<a 
    href="#"
    class="itemButton btn btn-primary col-lg-3">
    Orders
</a>
<a 
    href="#"
    class="itemButton btn btn-default col-lg-3">
    Users
</a>
<a 
    href="#"
    class="itemButton btn btn-danger col-lg-3">
    Edit my profile
</a>
<br>
{{--
    *mygtukus paversk atskirais komponentais
    *visa sita gali paversti js
    --}}
{{--<h2 class="text-center">Number of Items ( {{$count}} ) </h2>--}}


@component('components.create',
        ['route'=>'item.create',
        'name'=>'Add a new item'])
@endcomponent
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image URL</th>
                    <th>Price</th>
                    <th>Tax</th>
                    <th>Price after Tax</th>
                    <th>In Stock</th>
                    <th>Last Resupply</th>
                    <th>Admin right to</th>  
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->title}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->imageURL}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->tax}}</td>
                    <td>{{$item->price}}+{{$item->tax}}</td>
                    <td>{{$item->inStock}}</td>
                    <td>{{$item->lastRecieved}}</td>
                    <td>
                    @component('components.delete',[
                        'route'=>'item',
                        'id'=>$item->id,
                        'name'=>'Remove item'])
                    @endcomponent
                    @component('components.edit',[
                        'route'=>'item',
                        'id'=>$item->id,
                        'name'=>'Edit item'])
                    @endcomponent
                    @endforeach
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
@endsection
