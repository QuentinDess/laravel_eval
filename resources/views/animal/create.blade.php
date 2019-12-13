@extends('layouts.template')
@section('content')

<h1> Page d'ajout d'animal</h1>
<form action="storeAnimal" method="POST">
    @csrf
    <div class="form-group form-center">
        <label for="name">Nom</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group form-center">
        <label for="age">Age</label>
        <input type="number" class="form-control" id="age" name="age" required>
    </div>
    <div class="form-group form-center">
        <label for="size">Taille</label>
        <input type="number" class="form-control" id="size" name="size" required>
    </div>
    <div class="form-group form-center">
        <label for="gender">Sexe</label>
        <input type="text" class="form-control" id="gender " name="gender" required>
    </div>
    <div class="form-group form-center">
        <label for="race_id">Race </label><br>
        <select name="race_id" id="race_id">
            @foreach ($races as $race)
            <option value="{{$race->id}}">{{$race->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection