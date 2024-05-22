<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'myProject')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/')}}/css/master.css" />
</head>
<body>
@includeIf('_partials.nav')
<!-- Begin page content -->
<main role="main" class="container">
   @yield('content')
</main>

<footer class="bg-dark text-light bg-opacity-75 p-4 text-center position-fixed bottom-0 w-100">         
  <em>&copy; 2023 Copyright by design</em>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>