<!DOCTYPE html>
<html lang="en">
	@section('title')
	Muzammil Hassan
	@endsection
@include('admin.includes.head')
<body>
	<div class="wrapper">

		@include('admin.includes.sidebar')
		<div class="main">
			
			@include('admin.includes.navbar')
			
			<main class="content">
				<h2><b>@yield('home')</b></h2>
				@yield('mainContent')

			</main> 
@include('admin.includes.footer')
		</div>
	</div>
	@include('admin.includes.script')
</body>

</html>