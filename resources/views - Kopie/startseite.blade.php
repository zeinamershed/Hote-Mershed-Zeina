@extends('layouts.master')
@section('title', 'Startseite')
@section('content')
<div class="container bg-dark p-4 bg-opacity-75">
<div class="row">
<div class="col-md-121 card-group">

<div class="card text-center m-1 col-md-6">
  <div class="card-header">{{count($daten)}} Kommentare</div>
  <div class="card-body">

  @foreach($daten AS $blog)
  <div class="card text-center m-1 col-md-6">
    <div class="card-header">{{$blog['titel']}}</div>
    <div class="card-body">
      <p>{!! $blog['content'] !!}</p>
    </div>
    <div class="card-footer text-muted">{{$blog['autor']}}</div>
  </div>
  @endforeach

  </div>
  <div class="card-footer text-muted">Autor: xy</div>

  
</div>

</div>
</div>
</div>
@endsection
