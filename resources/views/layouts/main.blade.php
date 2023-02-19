<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>RENTAL MOBIL</title>
    @include('link.css')
</head>

<body class="sb-nav-fixed">
    @include('includes.navbar')
    <div id="layoutSidenav">
        @include('includes.sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('content')
                </div>
            </main>
            @include('includes.footer')
        </div>
    </div>
    @include('link.javascript')
</body>

</html>
