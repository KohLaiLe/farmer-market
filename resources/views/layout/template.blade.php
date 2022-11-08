
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Market | {{ $title }}</title>
    <link rel="icon" href="{{ $icon }}">
    <link rel="stylesheet" href="{{ url('style.css') }}">
</head>
<body>
    @include('layout.header')
    @yield('banner')
    @yield('about')
    @yield('products')
    @include('layout.footer')
</body>
</html>
