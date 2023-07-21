<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    <!-- css -->
    @include('admin.layouts.css')
    @stack('css-custom')
</head>

<body>
    <div id="app">
        <!-- sidebar -->
        @include('admin.layouts.sidebar')
        <!-- sidebar -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-content">
                @yield('isi-contentAdmin')
                {{ isset($slot) ? $slot : null }}
            </div>


        </div>
    </div>
    <!-- js -->
    @include('admin.layouts.js')
    @stack('js-custom')
    <!-- js end -->
</body>

</html>
