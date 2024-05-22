@extends('layouts.master')
@section('title', 'post')
@section('content')
<div class="card text-center m-5 p-5" style="background-color: #e0e0e0;">
<div class="row">
<div class="col-md-121 card-group">

<div class="card m-1 col-md-6 border-5">
  <div class="card-header h2">
    <i class="fa-solid fa-comment me-2 text-dark"></i>
    <b>{{ $post->comment }}</b>
    <span class="float-end h5">
      geschrieben am: <i>"{{ $post->created_at ? $post->created_at->format('d.F.Y H:i') : 'unbekannt' }}"</i>
      
      @if($post->updated_at > $post->created_at)
      <b> | </b>
      geändert am: <i>"{{ $post->updated_at->format('d.m.Y H:i') }}"</i>
      @endif
    </span>
  </div>
  <div class="card-body">
    <p>{!! nl2br($post->comment) !!}</p>

    <a href="{{url('post')}}/del/{{$post->id}}" class="btn btn-outline-danger">
      <i class="fa-solid fa-trash-can h4 m-0"></i>
      löschen
    </a>

    <a href="{{url('post')}}" class="btn btn-secondary mt-2 float-end">
      <i class="fa-solid fa-circle-left fs-4"></i>
      zurück
    </a>
  </div>
</div>

</div>
</div>
</div>
@endsection
