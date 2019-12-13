@extends('layouts.template')

@section('content')
<table class="table table-striped table-bordered">
   
    <tr class="thead-dark">
        @if(Auth::check())
        @if(Auth::user()->role->role=="Admin")
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Age</th>
        <th scope="col">Genre</th>
        <th scope="col">Taille</th>
        <th scope="col">Race</th>
        <th></th>
        <th></th>
        @else
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Age</th>
        <th scope="col">Genre</th>
        <th scope="col">Taille</th>
        <th scope="col">Race</th>
        @endif
        @else 
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Age</th>
        <th scope="col">Genre</th>
        <th scope="col">Taille</th>
        <th scope="col">Race</th>
        @endif

    </tr>


@foreach ($animals as $animal )
    
    <tr>
        @if(Auth::check())
        @if(Auth::user()->role->role=="Admin")
        <td class="alert-warning"> {{$animal->id}} </td>
        <td class="alert-info"> {{$animal->name}} </td>
        <td class="alert-info"> {{$animal->age}} </td>
        <td class="alert-info"> {{$animal->gender}} </td>
        <td class="alert-info"> {{$animal->size}}cm </td>
        <td class="alert-warning"> {{$animal->race->name}} </td>
        <td class="alert-danger">
            <form action="{{route('editAnimal', $animal->id) }}" method="POST">
                @csrf
               
                <button type="submit" class="btn-primary">Modifier</button>
            </form>
        </td>
        <td class="alert-danger">
            <form action="{{route('deleteAnimal', $animal->id) }}" method="POST">
                @csrf
               
            <button type="submit" class="btn-primary">Supprimer</button>
        </form>
        </td>
        @else 
        <td class="alert-warning"> {{$animal->id}} </td>
        <td class="alert-info"> {{$animal->name}} </td>
        <td class="alert-info"> {{$animal->age}} </td>
        <td class="alert-info"> {{$animal->gender}} </td>
        <td class="alert-info"> {{$animal->size}}cm </td>
        <td class="alert-warning"> {{$animal->race->name}} </td>
        @endif
        @else 
        <td class="alert-warning"> {{$animal->id}} </td>
        <td class="alert-info"> {{$animal->name}} </td>
        <td class="alert-info"> {{$animal->age}} </td>
        <td class="alert-info"> {{$animal->gender}} </td>
        <td class="alert-info"> {{$animal->size}}cm </td>
        <td class="alert-warning"> {{$animal->race->name}} </td>
        @endif
    </tr>
@endforeach

</table>


@endSection