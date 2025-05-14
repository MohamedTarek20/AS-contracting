{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{env('APP_NAME')}} | Dashboard</title>

    <!-- Main Scripts -->
    @include('dashboard.partials.styles')
    <!-- /.main-scripts -->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('dashboard.partials.navbar')
        <!-- /.navbar -->

        <div style="margin-left: 15.6rem!important;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->

        <!-- Footer -->
        @include('dashboard.partials.footer')
        <!-- /.footer -->

    </div>
    <!-- ./wrapper -->

    <!-- Main Scripts -->
    @include('dashboard.partials.scripts')
    <!-- /.main-scripts -->

</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dashboard/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('dashboard/assets/img/favicon.png') }}">
    <title>
        Elnasr | @yield('title')
    </title>
    @include('dashboard.partials.styles')
</head>

<body class="@if (auth()->check()) g-sidenav-show  bg-gray-100 @else bg-gray-200 @endif">

    @auth
        @include('dashboard.partials.sidebar')
    @endauth

    <main class="main-content @auth position-relative max-height-vh-100 h-100 border-radius-lg @else mt-0 @endauth">

        <!-- Navbar -->
        @include('dashboard.partials.header')
        <!-- End Navbar -->


        <div style="margin-left: 15.6rem!important;">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="@auth container-fluid py-2 @endauth" style="min-height: 87vh">
            @yield('content')
        </div>
        @include('dashboard.partials.footer')

    </main>

    @include('dashboard.partials.scripts')
</body>

</html>
