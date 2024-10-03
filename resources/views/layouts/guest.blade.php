<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <main class="py-4">
        <div class="container">
            <div class="row min-vh-100 justify-content-center align-items-center">
                <div class="col-md-4">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </main>
  </body>
</html>
