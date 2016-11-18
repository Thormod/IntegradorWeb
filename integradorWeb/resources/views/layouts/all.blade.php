
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/youplay.css" rel="stylesheet">

<style>
  body{
    bacground: #393630;
  }
  ul{
    list-style: none;
    padding:0;
  }
  li{
    padding: 1em;
    margin-bottom: 1em;
    background: rgba(8,3,37,.9);
  }
</style>
</head>
<body>

<ul>
    @foreach($blogs as $blog)
      <li>@include('layouts.post')</li>
    @endforeach
</ul>

</body>
</html>
