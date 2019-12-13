@extends('layouts.template')
@section('content')
<h1> Page de modification des races </h1>
<form action="{{route('updateRace', $race->id)}}" method="POST">
    @csrf
    <div class="form-group form-center">
        <label for="name">Nom</label>
        <input value="{{ $race->name }}"  type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group form-center">
        <label for="classification">Classification</label>
        <input value="{{$race->classification}}" placeholder="{{$race->classification}}" type="text" class="form-control" id="classification" name="classification" required>
    </div>
    <div class="form-group form-center">
        <label for="life">Espérance de vie</label>
        <input value="{{$race->life}}" placeholder="{{$race->life}}" type="number" class="form-control" id="life" name="life" required>
    </div>
   
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>


@endsection