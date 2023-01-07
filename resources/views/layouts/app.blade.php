<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    
</head>
<body>
    @include('inc.header')
    
    @if(Request::is('/'))
        @include('inc.main_slider')
    @endif
    
    <div class="container">
        <div class="row">
            <div class="col-8">
                @yield('first_h1')
                @yield('content')
            </div>
            <div class="col-3">
                @include('inc.aside')
            </div>
            
        </div>
    </div>
    @include('inc.footer')
</body>
</html>