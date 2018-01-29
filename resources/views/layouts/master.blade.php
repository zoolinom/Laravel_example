<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
</head>

<body>

@include('layouts.nav')

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">Recording of patients</h1>
        <p class="lead blog-description">An example of patient recording web page.</p>
    </div>
</div>

<div class="container">

    @yield('content')
    {{--@include('layouts.sidebar')--}}

</div><!-- /.container -->

@include('layouts.footer')

</body>
</html>
