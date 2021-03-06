<!DOCTYPE html>
<html lang="en">
<head>
    <title>@stack('title')</title>
    <meta name="description" content="@stack('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @stack('head')
</head>
<body>
    <div class="topnav">
        <a class="active" href="{{ route('home') }}" rel="nofollow">Home</a>
        <div class="dropdown">
            <a href="{{ route('articles') }}" class="dropbtn">Articles</a>
            <div class="dropdown-content">
                <a href="{{ route('destinations') }}">Destinations</a>
                <a href="{{ route('guides') }}">Guides</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="m-5">
            @stack('content')
        </div>
    </div>
</body>
</html>







