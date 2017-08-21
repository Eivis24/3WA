@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Item maker</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('item/'.$item->id) }}">
                        {{ csrf_field() }}
                        <input type="hidden" value="put" name="_method">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{old('title', $item->title)}}"autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" class="form-control" name="description" value="">
                                	{{old('description', $item->description)}}
    							</textarea>
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('imageURL') ? ' has-error' : '' }}">
                            <label for="imageURL" class="col-md-4 control-label">image URL</label>

                            <div class="col-md-6">
                                <input id="imageURL" type="url" class="form-control" name="imageURL" value="{{old('imageURL', $item->imageURL)}}">

                                @if ($errors->has('imageURL'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imageURL') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{old('price', $item->price)}}">

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tax') ? ' has-error' : '' }}">
                            <label for="tax" class="col-md-4 control-label">Tax</label>
                            {{--
                            cia reikes pvm formules
                            --}}

                            <div class="col-md-6">
                                <input id="tax" type="text" class="form-control" name="tax" value="{{old('tax', $item->tax)}}">

                                @if ($errors->has('tax'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tax') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('inStock') ? ' has-error' : '' }}">
                            <label for="inStock" class="col-md-4 control-label">In Stock</label>

                            <div class="col-md-6">
                                <input id="inStock" type="text" class="form-control" name="inStock" value="{{old('inStock', $item->inStock)}}">

                                @if ($errors->has('inStock'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('inStock') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastRecieved') ? ' has-error' : '' }}">
                            <label for="lastRecieved" class="col-md-4 control-label">Last restock</label>

                            <div class="col-md-6">
                                <input id="lastRecieved" type="text" class="form-control" name="lastRecieved" value="{{old('lastRecieved', $item->lastRecieved)}}">

                                @if ($errors->has('lastRecieved'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastRecieved') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Finish editing
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection