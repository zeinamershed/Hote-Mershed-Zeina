<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'MyHotel')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{url('/')}}/css/master.css" />
</head>
<body>
@includeIf('_partials.nav')
<!-- Begin page content -->
<main role="main" class="container mb-5">
  @if(session('msg_success'))
  <div class="container">
    <div class="alert alert-success">
      {!! session('msg_success') !!}
    </div>
  </div>
  @endif



  @if($errors->has('kommentar1'))
  <div class="container my-1">
    <div class="alert alert-danger">
      Bitte überprüfe deine Eingaben für input1
      <ul>
        @foreach($errors->get('kommentar1') as $error)
          <li>{!! $error !!}</li>
        @endforeach
      </ul>
    </div>
  </div>
@endif

  @yield('content')
</main>

<footer class="bg-dark text-light bg-opacity-75 p-4 text-center position-fixed bottom-0 w-100">         
  <em>&copy; 2024 Copyright by MERSHED</em>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>