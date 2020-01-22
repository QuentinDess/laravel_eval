@extends('layouts.app')

@section('content')
<section id="team">
    <div class="container wow fadeInUp">
        <div class="row">
        @foreach ($rooms as $room)
          
      
            <div class="col-md-3">
            <div class="member">
                <div class="pic"><img class="room_img" src="{{$room->avatar}}" alt=""></div>
                <h4>{{$room->name}}</h4>
                <span>{{$room->size}}</span>
                <em> {{$room->price}} $</em></br>
                <em>{{$room->description}}</em>
            </div>
            </div>
      
        @endforeach
        </div>
    </div>
</section>
@endsection
