<!DOCTYPE html>
<html>
<head>
	@include('partials._head')
</head>
<body>
	
	@include('partials._topbar')
	@include('partials._nav')

	<div id="all">
		@include('partials._messages')
		@yield('content')
		@include('partials._foot')
	</div>

	@include('partials._scripts')


</body>
</html>