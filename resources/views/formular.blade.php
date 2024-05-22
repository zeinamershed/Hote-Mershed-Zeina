@extends('layouts.master')
@section('title', 'contact')
@section('content')

<div class="card text-center m-5 p-5" style="background-color: #e0e0e0;" >
  <div class="row">

    <div class="col-md-6 p-5 text-center">
        <h2 class="larg">Herzlich willkommen bei MyHotel!</h2> <br>
        <h4 class="my-3 lead">Kontaktieren Sie uns für Reservierungen, Anfragen oder besondere Anliegen. MyHotel steht Ihnen jederzeit zur Verfügung, 
        um Ihren Aufenthalt unvergesslich zu machen.</h4>
        <div>
        <h4 class="my-3 lead">Haben Sie Fragen oder besondere Anforderungen? Wir stehen Ihnen gerne zur Verfügung. Nutzen Sie unser Kontaktformular,
        um uns Ihre Wünsche mitzuteilen. MyHotel - Ihr Zuhause fernab von Zuhause.</h4>
        <p class="text-muted larg">
            <i class="fas fa-phone-alt"></i>
            Telefon:  <a href="tel:+123456789">+1 (234) 567-89</a>
        </p>

        <p class="text-muted larg">
            <i class="far fa-envelope"></i>
            E-Mail: <a href="mailto:info@example.com">info@example.com</a>
        </p>
        </div>
        <div class="social-media">
            <h4>Folge uns auf:</h4>
            <a href="https://www.youtube.com/" target="_blank" class="btn btn-danger"><i class="fab fa-youtube"></i> YouTube</a>
            <a href="https://www.facebook.com/" target="_blank" class="btn btn-primary"><i class="fab fa-facebook"></i> Facebook</a>
            <a href="https://www.instagram.com/" target="_blank" class="btn btn-danger"><i class="fab fa-instagram"></i> Instagram</a>
        </div>
        

    </div>
   <div class="col-md-6">

    <form method="post" action="/formular" class="p-4">
        @csrf
        <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control"><br>
        @error('name')
            <div style="color: red;">{{'Name darf nicht leer sein'}}</div> 
        @enderror
        </div>

        <div class="form-group">
        <label for="nachname">Nachname:</label>
        <input type="text" id="nachname" name="nachname" value="{{ old('nachname') }}" class="form-control"> <br>
        @error('nachname')
            <div style="color: red;">{{'Nahcname darf nicht leer sein' }}</div>
        @enderror
        </div>

        <div class="form-group">
        <label for="telefonnummer">Telefonnummer:</label>
        <input type="text" id="telefonnummer" name="telefonnummer" value="{{ old('telefonnummer') }}" class="form-control"> <br>
        @error('telefonnummer')
            <div style="color: red;">{{'Telefonnummer darf nicht leer sein'}}</div>
        @enderror
        </div>

        <div class="form-group">
        <label for="email">E-Mail:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control"> <br>
        @error('email')
            <div style="color: red;">{{'E-Mail darf nicht leer sein'}}</div>
        @enderror
        </div>

        <div class="form-group">
        <label for="nachricht">Nachricht:</label>
        <textarea id="nachricht" name="nachricht" class="form-control">{{ old('nachricht') }}</textarea> <br>
        @error('nachricht')
            <div style="color: red;">{{'Bitte schreiben Ihre Nachricht oder Ihre Frage'}}</div>
        @enderror
        </div>

        <button type="submit" class="btn btn-primary">Senden</button>

        @if(session('success'))
          <div style="color: green;">{{ session('success') }}</div>
        @endif

    </form>
    </div>
  </div>

</div>



@endsection

