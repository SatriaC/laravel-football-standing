<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Ticketing - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    @include('includes.admin.style')
    @stack('custom-style')
</head>

<body>
    <div id="layout-wrapper">
		<!-- Top Menu Items -->
        @include('includes.admin.header')
		<!-- /Top Menu Items -->

		<!-- Left Sidebar Menu -->
		@include('includes.admin.navbar')
		<!-- /Left Sidebar Menu -->


        <!-- Main Content -->
        <div class="main-content">

            <div class="page-content">
                @yield('content')
            </div>


			<!-- Footer -->
			@include('includes.admin.footer')
			<!-- /Footer -->

		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

	<!-- JavaScript -->
    @include('includes.admin.script')
    @stack('custom-script')
</body>

</html>
