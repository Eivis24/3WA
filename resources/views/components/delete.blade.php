@if(Auth::user())
	@if(Auth::user()->roles=='admin')
		<form method="POST" action="{{route($route.'.destroy', $id)}}">
		    {{method_field('DELETE')}}
		    {{ csrf_field() }}
			<button class='btn btn-md btn-danger pull-left' >{{$name}}</button>
		</form>
	@endif
@endif