@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <hr>
        <hr>
                @component('component.indexButton',
                ['route'=>'dish.index',
                'indexName'=>'Back to indexes'])
                @endcomponent
                <hr>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dish maker</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('admin/dish/'.$dish->id) }}">
                        {{ csrf_field() }}
                        <input type="hidden" value="put" name="_method">
                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{old('title', $dish->title)}}"autofocus>

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
                                	{{old('description', $dish->description)}}
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
                                <input id="imageURL" type="url" class="form-control" name="imageURL" value="{{old('imageURL', $dish->imageURL)}}">

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
                                <input id="price" type="text" class="form-control" name="price" value="{{old('price', $dish->price)}}">

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
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
