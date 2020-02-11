
@extends('layout.generale')
@section('contenu')
    <h2> La page perso de {{$utilisateur->name}}</h2>

    @auth
            @if(Auth::id() != $utilisateur->id)
                @if(Auth::user()->jeLesSuit->contains($utilisateur->id))
                    <a href="/suivre/{{$utilisateur->id}}"> je le suis </a>
                    @else
                    <a href="/suivre/{{$utilisateur->id}}"> je ne le suis pas</a>
                @endif
            @endif
    @endauth

    <ul>
        <li> {{$utilisateur->chansons()->count()}} chansons uploadées </li>
        <!-- parenthèses permettent de ne pas tout charger -->
        <li> Il suit {{$utilisateur->jeLesSuit()->count()}} personnes </li>
        <li> Il est suivi par {{$utilisateur->ilsMeSuivent()->count()}} personnes </li>
    </ul>
    @include('FirstController._chansons', ["chansons" => $utilisateur->chansons])
@endsection

