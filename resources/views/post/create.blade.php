@extends('layouts.master')
@section('title', 'Neue Bewertung')
@section('content')
<div class="card text-center m-5 p-5" style="background-color: #e0e0e0;">
<div class="row">

<div class="card p-0 border-secondary border-5">
  <div class="card-header h2">
    <i class="fa-solid fa-comment me-2 fs-1"></i>
    Gerne nehmen wir Ihre Bewertung auf
  </div>
  <div class="card-body">
    
    <form action="/post" method="post">
      @csrf    
      <div class="form-group">
        <label for="kommentar">Ihre Bewertung</label>
        <textarea id="kommentar" name="kommentar1" 
                  class="form-control {{ $errors->has('kommentar1') ? 'border-danger' : ''}}">{{ old('kommentar1') }}</textarea>
        <small class="form-text text-danger">{!! $errors->first('kommentar1') !!}</small>
      
            
      <button type="submit" class="btn btn-warning mt-2">
        <i class="fa-solid fa-circle-plus fs-1"></i>
        neue Bewertung anlegen
      </button>
      </div>
    </form>

    <a href="{{url('post')}}" class="btn btn-secondary mt-2 float-end">
      <i class="fa-solid fa-circle-left fs-4"></i>
      zurück
    </a>
  </div>
</div>

</div>
</div>
@endsection
