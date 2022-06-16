<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
   <link rel="stylesheet" href="{{asset('css/app.css')}} ">
</head>

<body>
    <div class="flex-center position-ref full-height">

        @if (Route::has('login'))
        <div class="top-right links ">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            {{-- <a href="{{route('admin.posts.index')}}">Posts</a>
            <a href="{{route('admin.categories.index')}}">Category</a>
            <a href="{{route('admin.posts.create')}}" class="btn btn-outline-info">Crea nuovo post +</a> --}}
            @else
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                {{-- Pagina in costruzione --}}
            </div>
            <div id="root">

            </div>
        </div>
    </div>
    {{-- Richiamare javascript con dentro vue --}}
    <script src=" {{asset('js/front.js')}} "></script>
    <script src=" {{asset('js/app.js')}} "></script>
</body>

</html>
