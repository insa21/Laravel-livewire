<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Deskripsi halaman yang relevan">
    <meta name="author" content="Nama atau tim pengembang">

    <!-- Bootstrap CSS -->
    @vite(['resources/js/app.js', 'resources/css/app.css'])

    <!-- Page Title -->
    <title>{{ $title ?? config('app.name') }}</title>
</head>

<body>
    <x-navigation-menu />
    <main class="py-5">
        <div class="container">
            {{ $slot }}
        </div>
    </main>
    </script>
</body>

</html>
