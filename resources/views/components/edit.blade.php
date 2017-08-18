@if(Auth::user())
	@if(Auth::user()->roles=='admin')
		<a
		href="{{route($route.'.edit', $id)}}"
		class='btn btn-md btn-success pull-left'>
		{{$name}}</a>
	@endif
@endif