@extends('layouts.template')
@section('content')
<h1> Page de modification des profils animaux </h1>
<form action="{{route('updateAnimal', $animal->id)}}" method="POST">
    @csrf
    <div class="form-group form-center">
        <label for="name">Nom</label>
        <input value="{{ $animal->name }}"  type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group form-center">
        <label for="age">Age</label>
        <input value="{{$animal->age}}" placeholder="{{$animal->age}}" type="number" class="form-control" id="age" name="age" required>
    </div>
    <div class="form-group form-center">
        <label for="size">Taille</label>
        <input value="{{$animal->size}}" placeholder="{{$animal->size}}" type="number" class="form-control" id="size" name="size" required>
    </div>
    <div class="form-group form-center">
        <label for="gender">Sexe</label>
        <input value="{{$animal->gender}}" placeholder="{{$animal->gender}}" type="text" class="form-control" id="gender" name="gender" required>
    </div>
    <div class="form-group form-center">
        <label for="race_id">Race</label><br>
        <select name="race_id" id="race_id">
             @foreach ($races as $race)
                @if($race->name == $animal->race->name)
                    <option selected value="{{$race->id}}">{{$race->name}}</option>
                @else
                    <option value="{{$race->id}}">{{$race->name}}</option>
                @endif
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>


@endsection