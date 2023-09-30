<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("/css/main.css")}}">
    <link rel="stylesheet" href="{{asset("/css/bootstrap.css")}}">
    <script src="{{asset("/js/bootstrap.js")}}"></script>
</head>
<body style="background-color: #F3F4FF;">
    <div class="d-flex">
        @include('components.sidebar')
        <div class="w-100">
            @yield('content')
        </div>
    </div>
</body>
</html>