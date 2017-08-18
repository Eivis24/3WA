@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <br>
        <br>
        <br>
        @component('component.indexButton',
            ['route'=>'dish.index',
            'indexName'=>'Back to indexes'])
        @endcomponent
    </div>
    <br>
    <div class="row">
        <div class='list-group'>
            <p class="panel-heading list-group-item list-group-item-success"><b>Title: </b>{{$dish->title}}</p>
            <div class="list-group-item" href="#">
                <img class="img-responsive center-block" src="{{$dish->imageURL}}">
            </div>
            <p class="list-group-item height-fix"><b>Description: </b>{{($dish->description)}}</p>
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
    </div>
</div>
@endsection