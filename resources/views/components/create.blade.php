@if(Auth::user())
	@if(Auth::user()->roles=='admin')
		<a 
			href="{{route($route)}}"
			class='btn btn-md col-md-12 btn-default'>
			{{$name}}
		</a>
	@endif
@endif