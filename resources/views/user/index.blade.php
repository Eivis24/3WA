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
    href="{{ route('order.index') }}"
    class="itemButton btn btn-primary col-lg-3">
    Orders
</a>
<a 
    href="{{ route('user.index') }}"
    class="itemButton btn btn-default col-lg-3">
    Users
</a>
<a 
    href="{{ route('user.edit') }}"
    //i need to send the user id
    class="itemButton btn btn-danger col-lg-3">
    Edit my profile
</a>
<br>
{{--
    *mygtukus paversk atskirais komponentais
    *visa sita gali paversti js
    --}}

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Date Of Birth</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>User since</th>  
                    <th>Admin right to</th>  
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->surname}}</td>
                    <td>{{$user->dateOfBirth}}</td>
                    <td>{{$user->phoneNumber}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->city}}</td>
                    <td>{{$user->country}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                    @component('components.delete',[
                                    'route'=>'user',
                                    'id'=>$user->id,
                                    'name'=>'Remove user'])
                                    @endcomponent
                    @endforeach
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
@endsection