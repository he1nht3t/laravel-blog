<!doctype html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
        rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Laravel From Scratch Blog</title>
    @vite('resources/css/app.css')
</head>
<body style="font-family: Open Sans, sans-serif" class="h-full">
<section class="px-6 py-8">
    @include('components._nav')

    {{ $slot }}

    @include('components._footer')

    <x-flash />
</section>
</body>
</html>



