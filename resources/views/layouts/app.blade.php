<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tu Espacio Literario') }}</title>

    <!-- Tailwind y Alpine (Motores del diseño Frontend) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com"></script>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    
    <!-- CSS de AdminLTE y Plugins -->
    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('css')
</head>

<body class="bg-[#FDFBF7] hold-transition sidebar-mini layout-fixed">
    
    <!-- Navbar Responsivo -->
    <x-navbar /> 

    <!-- Contenido Principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer />

    <!-- Scripts de jQuery y AdminLTE -->
    <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/dist/js/adminlte.js')}}"></script>

    @stack('js')
</body>
</html>
