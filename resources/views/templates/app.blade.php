<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 6 - CMS || @yield('title')</title>
    <script src="https://cdn.tailwindcss.com?plugins=line-clamp"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Flowbite -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
</head>
<body>
    @include('templates.partials.sidebar')

    <div class="sm:ml-64">
        @include('templates.partials.header')
        @yield('content')
    </div>
    
    @include('templates.partials.script')
    @yield('script')
</body>
</html>