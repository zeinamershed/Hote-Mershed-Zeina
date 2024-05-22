@extends('layouts.master')
@section('title', 'post')
@section('content')
<div class="card text-left m-5 p-5" style="background-color: #e0e0e0;">
<div class="row">
 <div class="col-md-121 card-group  "> 

<div class="card m-1 col-md-6 ">
  <div class="card-header">
    <i class="fa-solid fa-comments me-2 text-secondary"></i>
    <?php 
    $posts = DB::table('posts')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->select('posts.*', 'users.name')
        ->get();
     ?> 


      {{$posts->count() ? 'Alle Bewertungen ('.$posts->count().')' : 'Schreiben Sie eine Bewertung'}}
      @foreach($posts as $post)
      <ul class="list-group h4 my-2 alert alert-light p-2">
        <li class="list-group-item">{{ $post->name }}</li>
        <li class="list-group-item">{{ $post->comment }}</li>
      </ul>
      @endforeach
      
       

         @auth

            @if( auth()->id() ===  $post->user_id)
            <a href="/post/{{$post->id}}/edit" class="ms-2 btn btn-outline-primary" title="Bewertung bearbeiten">
              <i class="fa-solid fa-pen-to-square h4 m-0 me-1 text-dark"></i>
              <!--Bearbeiten--> 
            </a>

            <form action="/post/{{$post->id}}" method="post" class="d-inline-block">
              @csrf 
              @method('DELETE')
              <button type="submit" value="löschen" class="btn btn-outline-danger" 
                    title="Bewertung löschen"
              onclick="return confirm('Wollen Sie den Bewertung {{$post->comment}}\nwirklich löschen?');">
                <i class="fa-solid fa-trash-can h4 m-0 me-1"></i>
                <!--löschen-->
              </button>
            </form>
            
          @endauth

          @else 
            <p>Noch keine Bewertung vorhanden</p>
          @endif

  <div class="card-body">
    @auth
    <a href="post/create" class="btn btn-warning mt-2">
      <i class="fa-solid fa-circle-plus"></i>
      Neue Bewertung anlegen
    </a>
    @endauth
    @guest 
      <b class="badge bg-warning text-dark">Registrierte Users können gerne Bewertungen schreiben</b>
    @endguest
  </div>
</div>

</div>
</div>
</div>
@endsection
