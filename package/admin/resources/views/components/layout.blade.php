<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/sevag/admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/sevag/admin/css/adminlte.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('sevag/admin/css/app.css') }}"> --}}
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <x-admin::nav />
        <x-admin::sidebar />
        {{ $slot }}
        <x-admin::footer />
    </div>
    <!-- jQuery -->
    <script src="/sevag/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/sevag/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/sevag/admin/js/adminlte.min.js"></script>
</body>

</html>
