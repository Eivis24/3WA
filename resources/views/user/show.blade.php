@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <hr>
        <hr>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile info</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input disabled id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}"autofocus>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Surname</label>

                            <div class="col-md-6">
                                <input disabled id="surname" type="text" class="form-control" name="surname" value="{{ Auth::user()->surname }}">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dateOfBirth') ? ' has-error' : '' }}">
                            <label for="dateOfBirth" class="col-md-4 control-label">Date Of Birth </label>

                            <div class="col-md-6">
                                <input disabled id="dateOfBirth" type="date" class="form-control" name="dateOfBirth" value="{{ Auth::user()->dateOfBirth }}">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phoneNumber') ? ' has-error' : '' }}">
                            <label for="phoneNumber" class="col-md-4 control-label">Phone Number</label>

                            <div class="col-md-6">
                                <input disabled id="phoneNumber" type="tel" class="form-control" name="phoneNumber" value="{{ Auth::user()->phoneNumber }}">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input disabled id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Home address</label>

                            <div class="col-md-6">
                                <input disabled id="address" type="text" class="form-control" name="address" value="{{ Auth::user()->address }}">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input disabled id="city" type="text" class="form-control" name="city" value="{{ Auth::user()->city }}">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('zipCode') ? ' has-error' : '' }}">
                            <label for="text " class="col-md-4 control-label">Post code</label>

                            <div class="col-md-6">
                                <input disabled id="zipCode" type="text" class="form-control" name="zipCode" value="{{ Auth::user()->zipCode }}">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <input disabled id="country" type="text" class="form-control" name="country" value="{{ Auth::user()->country }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                @component('component.edit',[
                                    'route'=>'user',
                                    'id'=>$user->id,
                                    'name'=>'Edit profile'])
                                @endcomponent
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection