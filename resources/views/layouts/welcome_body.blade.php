<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Soporte multilingüe -->
        <meta charset="utf-8">

        <!-- Diseño responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Protección contra CSRF -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Título de la aplicación -->
        <title>{{ config('app.name', 'RestaurantApp') }}</title>

        <!-- Vite: CSS personalizado y JS de la app -->
        @vite(['resources/css/welcome.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Header opcional -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Sección para inyectar contenido desde las vistas -->
            <main class="p-6 text-center">
                @yield('content')
            </main>
        </div>
    </body>
</html>
