@extends('layouts.app')

@section('content')
<hr>
<hr>
<h2 class="text-center">Number of users ( {{$count}} )</h2>
<div class="container">
    <div class="row">
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
                    @component('component.delete',[
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
