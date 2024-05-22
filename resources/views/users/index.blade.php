@extends('layouts.master')
@section('title', 'Bewertungen')
@section('content')
<div class="container bg-dark p-4 bg-opacity-75">
<div class="row">
<div class="col-md-121 card-group">

<div class="card m-1 col-md-6">
  
  <div class="card-body">

    <ul class="list-group h4">
      @foreach($beitraege as $beitrag)
        <li class="list-group-item">
          <i class="fa-regular fa-user me-2 text-primary"></i>
            {{ $beitrag->name}}
            <a href="/users/{{$beitrag->id}}" class="btn btn-outline-info" title="Detailansicht">
              <i class="fa-solid fa-eye h4 m-0"></i>
              <!--Detailansicht-->
            </a>
            <div class="float-end h5">
              angemeldet (
                 @if( isset($beitrag->updated_at) )
                    {{$beitrag->updated_at->diffForHumans() }}
                 @else 
                    kein Datum
                @endif
              )
            </div>
        </li>
      @endforeach
    </ul>
  </div>
  @auth
    <a href="post/create" class="btn btn-primary mt-2">
      <i class="fa-solid fa-circle-plus"></i>
      Neue Bewertung anlegen
    </a>
    @endauth
</div>

</div>
</div>
</div>
@endsection

