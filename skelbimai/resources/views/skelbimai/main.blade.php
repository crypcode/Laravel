
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Skelbimai</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">
    <link rel="stylesheet" href="{{ mix('css/vendor.css') }}">

</head>



<body>
<div class="site-wrap">
{{--@include('skelbimai/_partials/nav')--}}
@include('skelbimai/_partials/admin')
@include('skelbimai/_partials/header')
@yield('content')
@include('skelbimai/_partials/footer')
</div>
<script src="{{mix("js/app.js")}}"></script>

</body>
</html>