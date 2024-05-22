@extends('layouts.master')
@section('title', 'Gallery')
@section('content')

        <div class="card text-center m-1 p-5" style="background-color: #e0e0e0;">
         <div class="row">
            @foreach($photos as $photo)
                <div class="col-md-4">
                    <div class="card text-center m-1 p-5">
                        <img src="{{ asset($photo->image_path) }}" alt="Foto" class="card-img">
                    </div>
                </div>
            @endforeach
          </div>
        </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
