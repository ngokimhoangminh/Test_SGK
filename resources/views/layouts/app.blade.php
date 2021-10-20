<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!--Fontawesome-->
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- CSS Icons -->
        <link rel="stylesheet" href="{{ asset('css/pen.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/printer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/trash.css') }}">
        <link rel="stylesheet" href="{{ asset('css/check-o.css') }}">
        <link rel="stylesheet" href="{{ asset('css/corner-down-left.css') }}">
        <link rel="stylesheet" href="{{ asset('css/search.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fileicon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/shape-triangle.css') }}"> --}}

       
        <!-- jQuery: deferを付けない：先に読み込ませるため -->
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

		<!-- jQueryUI -->
        <link rel="stylesheet" href="{{ asset('jquery-ui-1.12.1/jquery-ui.min.css') }}">
        <script src="{{ asset('jquery-ui-1.12.1/jquery-ui.min.js') }}" defer></script>
        
        <!-- DataTables --->
        <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
        <script src="{{ asset('DataTables/datatables.min.js') }}" defer></script>


    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <!-- E phai dat ID, ddeer vuejs render ra -->
            <main class="bg-white" id="app">
                {{ $slot }}
            </main>
        </div>

         <!-- Scripts -->
         <script src="{{ asset('js/app.js') }}" defer></script>
         <!--Sweetalert-->
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    </body>
</html>
