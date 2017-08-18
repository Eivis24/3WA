@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="alert alert-succes" style="margin-top:45px;">
            {{Session::get('success')}}
        </div>
    </div>
    <div class="row">
        @component('component.create',
        ['route'=>'dish.create',
        'name'=>'Make a new dish'])
        @endcomponent
    </div>
    <hr>
    <div class="row">
        @foreach($dishes as $dish)
        <div class='list-group col-lg-4' style="height:540px">
            <p class="panel-heading list-group-item list-group-item-success"><b>Title: </b>{{$dish->title}}</p>
            <a class="list-group-item" href="{{route('dish.show', $dish->id)}}">
                <img class="img-responsive" src="{{$dish->imageURL}}" style="height:300px">
            </a>
            <p class="list-group-item height-fix"><b>Description: </b>{{substr($dish->description, 0, 150)}}</p>
            <p class="list-group-item"><b>Price: </b>{{$dish->price}}</p>
            @component('component.edit',[
                'route'=>'dish',
                'id'=>$dish->id,
                'name'=>'Edit dish'])
            @endcomponent
            @component('component.delete',[
                'route'=>'dish',
                'id'=>$dish->id,
                'name'=>'Remove dish'])
            @endcomponent
            @component('dish.component.cart',['id'=>$dish->id])) @endcomponent
        </div>
        @endforeach
    </div>
</div>
@endsection
