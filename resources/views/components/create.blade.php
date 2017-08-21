@if(Auth::user())
	@if(Auth::user()->role=='admin')
		<a 
			href="{{route($route)}}"
			class='btn btn-md col-lg-12 btn-default'>
			{{$name}}
		</a>
	@endif
@endif