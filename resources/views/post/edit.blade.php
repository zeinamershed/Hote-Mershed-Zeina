@extends('layouts.master')
@section('title', 'bearbeiten')
@section('content')


<div class="card text-center m-5 p-5" style="background-color: #e0e0e0;">
  <div class="row"> 

          
        <div class="card-body">
           <div class="card-header h2">
            <i class="fa-solid fa-pen-to-square me-2 text-dark fs-1"></i>
            Bewerbung bearbeiten
           </div>
          
            <form action="/post/{{$post->id}}" method="post">
              @csrf
              @method('PUT')     
              <div class="form-group">
                  <label for="kommentar"> Neue Kommentar</label>
                  <textarea id="kommentar" name="kommentar1" value="{{ old('kommentar1') ?? $post->comment }}"
                            class="form-control {{ $errors->has('kommentar1') ? 'border-danger' : ''}}">{{old('kommentar1') ?? $post->comment }}</textarea>
                  <small class="form-text text-danger">{!! $errors->first('kommentar1') !!}</small>
                
                      
                  <button type="submit" class="btn btn-warning mt-2">
                    <i class="fa-solid fa-circle-plus fs-1"></i>
                    Beitrag ändern
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
@endsection
