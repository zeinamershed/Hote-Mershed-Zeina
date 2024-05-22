@extends('layouts.master')
@section('title', 'Startseite')
@section('content')

  <div class="card text-center m-5 p-5" style="background-color: #e0e0e0;">
    
    <div class="card-body">
      <h2>WILLKOMMEN IM MyHotel HOTEL BERLIN EAST</h2>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, 
        ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, 
        fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean 
        vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante,
        dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. 
        Aenean imperdiet. </p>
    </div>
        <div class="container mt-3">
          <div class="d-flex flex-row m-8 p-2" style="width: 100%; height: 100%">
                <div class="card " style="width: 21rem;">
                      <img src="{{ asset('images/resturant.webp') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Resturants & Bar </p>
                      </div>
                </div>

                <div class="card" style="width: 35rem;">
                      <img src="{{ asset('images/messen.webp') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Events & Messen</p>
                      </div>
                </div>

                <div class="card" style="width: 24rem;">
                      <img src="{{ asset('images/ausblick.webp') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Schöne Ausblick</p>
                      </div>
                </div>

                <div class="card" style="width: 18rem;">
                      <img src="{{ asset('images/businessraum.webp') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Businessraum</p>
                      </div>
                </div>

          </div>
        </div>
    
  </div>  
</div>


@endsection
