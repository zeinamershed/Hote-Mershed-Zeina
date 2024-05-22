@extends('layouts.master')
@section('title', 'User Login')
@section('content')
<div class="container bg-dark p-4 bg-opacity-75">
<div class="row">
<div class="col-md-121">
<h2 class="text-light fs-2">Login</h2>

@if(  $errors->any()  )
  <div class="text-light">
    <p>Bitte überprüfe deine Angaben</p>
    <ul class="list-group">
      @foreach($errors->all() AS $error)
        <li class="list-group-item list-group-item-danger">{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif


<form action="{{route('log.submit')}}" method="POST">
  @csrf
	<div class="m-1">
		<input type="text" name="nachname" 
        class="form-control @error('nachname') is-invalid @enderror "
          value="{{old('nachname')}}" />
    @error('nachname')<small class="text-form text-light d-block"> {{$message}} </small>@enderror
    <small class="text-form text-light">{{ $errors->first('nachname') }}</small>
	</div>
	<div class="m-1">
		<input type="text" name="vorname" 
        class="form-control @error('vorname') is-invalid @enderror"
        value="{{old('vorname')}}" />
	</div>
	<div class="m-1">
		<input type="text" name="mail" 
        class="form-control @error('mail') is-invalid @enderror" placeholder="E-Mail eingeben..."
        value="{{old('mail')}}" />
	</div>
	<div class="m-1">
		<input type="submit" class="btn btn-success" />
	</div>
</form>

</div>
</div>
</div>
@endsection