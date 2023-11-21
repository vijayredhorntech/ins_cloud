<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('styles')
    <title>Document</title>
</head>
<body>
      @include('Layouts.header')
        @yield('content')
      @include('Layouts.footer')




{{--      //extra javascrit--}}
     @stack('scripts')
</body>
</html>
