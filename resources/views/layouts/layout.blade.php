<!DOCTYPE html>
<html>
	@include('layouts.head')


<body>
	@include('layouts.nav')
<main role="main" class="container">
		@yield('content')
</main>
	


	@include('layouts.footer')
</body>
</html>