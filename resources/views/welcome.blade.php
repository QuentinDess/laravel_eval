@extends('layouts.app')

@section('content')
<!--==========================
  Team Section
  ============================-->
  <section id="team">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Notre équipe</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Des professionnels toujours disponible pour vos demandes</p>
        </div>
      </div>

      <div class="row">
      @foreach ($staffs as $staff)
          
      
        <div class="col-md-3">
          <div class="member">
            <div class="pic"><img src="{{$staff->avatar}}" alt=""></div>
            <h4>{{$staff->firstName}} {{$staff->lastName}}</h4>
            <span>{{$staff->role}}</span>
            <em>Mail: {{$staff->email}}</em></br>
            <em>Tel: {{$staff->phoneNumber}}</em>
          </div>
        </div>
      
      @endforeach
      </div>
    </div>
  </section>
  <!--==========================
  Testimonials Section
  ============================-->
  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Nos Chambres</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Quelque soit votre envie nous avons la chambre pour </p>
        </div>
      </div>
      @foreach ($rooms as $room)
      <div class="row">
       
          
        @guest
          @if (Route::has('register'))
          <div class="col-md-3">
          <div class="profile">
          <div class="pic"><img src="{{$room->avatar}}" alt=""></div>
          <h4>{{$room->name}}</h4>
            <span>Taille{{$room->size}}</span>
          </div>
          </div>
          @endif
        @else
          <div class="col-md-3">
          <div class="profile">
          <a href="{{route('showRoom')}}">
            <div class="pic"><img src="{{$room->avatar}}" alt=""></div>
          </a>
          <h4>{{$room->name}}</h4>
            <span>Taille{{$room->size}}</span>
          </div>
          </div>
          
        @endguest  
            
        
        <div class="col-md-9">
          <div class="quote">
            <b><img src="img/quote_sign_left.png" alt=""></b> {{$room->description}} <small><img src="img/quote_sign_right.png" alt=""></small>
          </div>
        </div>
      </div>
     @endforeach    


    </div>
  </section>
@endsection
