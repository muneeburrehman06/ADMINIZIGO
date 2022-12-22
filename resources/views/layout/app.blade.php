<!DOCTYPE html>
<html lang="en">

<head>
    <title>IZIGO</title>
	@include('includes.meta-css')
</head>
<body>
	<div class="main-wrapper">
		@include('includes.header')
        @include('includes.sidebar')
		<div class="page-wrapper">
			@yield('content')
		</div>
	</div>

	<div class="sidebar-overlay" data-reff=""></div>
	@include('includes.scripts')

</body>
</html>
