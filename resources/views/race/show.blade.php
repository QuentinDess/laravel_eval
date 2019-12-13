@extends('layouts.template')

@section('content')
    

<table class="table table-striped table-bordered">
   
    <tr class="thead-dark">
        @if(Auth::check())
        @if(Auth::user()->role->role=="Admin")
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Classification</th>
        <th scope="col">Espérance de vie</th>
        <th></th>
        <th></th> 
        @else
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Classification</th>
        <th scope="col">Espérance de vie</th>
        @endif
        @else 
        <th scope="col">#</th>
        <th scope="col">Nom</th>
        <th scope="col">Classification</th>
        <th scope="col">Espérance de vie</th>
        @endif
    </tr>


@foreach ($races as $race )
    
    <tr>
        @if(Auth::check())
        @if(Auth::user()->role->role=="Admin")
        <td class="alert-warning"> {{$race->id}} </td>
        <td class="alert-info"> {{$race->name}} </td>
        <td class="alert-info"> {{$race->classification}} </td>
        <td class="alert-info"> {{$race->life}} </td>
        <td class="alert-danger">
            <form action="{{route('editRace', $race->id) }}" method="POST">
                @csrf
               
                <button type="submit" class="btn-primary">Modifier</button>
            </form>
        </td>
        <td class="alert-danger">
            <form action="{{route('deleteRace', $race->id) }}" method="POST">
                @csrf
               
            <button type="submit" class="btn-primary">Supprimer</button>
        </form>
        </td>
        @else 
        <td class="alert-warning"> {{$race->id}} </td>
        <td class="alert-info"> {{$race->name}} </td>
        <td class="alert-info"> {{$race->classification}} </td>
        <td class="alert-info"> {{$race->life}} </td>
        @endif
        @else 
        <td class="alert-warning"> {{$race->id}} </td>
        <td class="alert-info"> {{$race->name}} </td>
        <td class="alert-info"> {{$race->classification}} </td>
        <td class="alert-info"> {{$race->life}} </td>
        @endif

    </tr>
@endforeach

</table>


@endSection