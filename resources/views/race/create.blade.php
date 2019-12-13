@extends('layouts.template')
@section('content')

<h1> Page d'ajout de race</h1>
<form action="storeRace" method="POST">
    @csrf
    <div class="form-group form-center">
        <label for="name">Nom</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group form-center">
        <label for="classification">Classification</label>
        <input type="text" class="form-control" id="classification" name="classification" required>
    </div>
    <div class="form-group form-center">
        <label for="life">Espérance de vie</label>
        <input type="number" class="form-control" id="life" name="life" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection