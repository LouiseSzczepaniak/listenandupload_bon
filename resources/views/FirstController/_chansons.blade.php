<ul>
@foreach($chansons as $c)
    <li>
        <a href="#" data-file="{{$c->url}}" class="chanson">{{$c->nom}}</a>
        Téléchargée par <a href="/utilisateur/{{$c->utilisateur->id}}"> {{$c->utilisateur->name}}</a>
    </li>
@endforeach
</ul>
