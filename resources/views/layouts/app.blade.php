<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>@yield('title', 'Laravel')</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        @livewireStyles
		@include('components.css')

        {{-- @stack('css') --}}

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				@include('components.navbar')
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
                    @include('components.sidebar')
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						@yield('nav-header')
					</header>

					<!-- start: page -->
                    {{-- content --}}
                    {{-- @yield('content') --}}
                    {{ $slot }}
					<!-- end: page -->
				</section>
			</div>

            @livewireScripts
        <script>
            window.livewire.on('CarsAdded', ()=> {
                $('#addCars').modal('hide');
            })
        </script>
		</section>

        @include('components.js')
        {{-- @stack('js') --}}

	</body>
</html>
