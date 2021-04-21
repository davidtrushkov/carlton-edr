<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="author" content="David Trushkov">
        <meta name="description" content="The Carlton water treatment facility data management system.">
        
        <title>{{ config('app.name', 'Carlton Plant') }}</title>
        <link rel="shortcut icon" type="image/jpg" href="/img/icons8-water-32.png"/>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Filepond stylesheet -->
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
        <!-- Load FilePond library -->
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
        
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            <!-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                     $header 
                </div>
            </header> -->
            @if(session()->has('error_message'))
                <div class="max-w-md mx-auto mt-9">
                    <div class="flex pb-6">
                        <div class="bg-red-300 border red-green-600 text-red-800 pl-3 pr-3 py-2 rounded inline-flex" role="alert">
                            <span class="block sm:inline text-sm">{{ session('error_message') }}</span>
                        </div>
                    </div>    
                </div>
            @endif

            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
