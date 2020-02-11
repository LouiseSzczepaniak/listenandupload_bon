@extends('layout.generale')
@section('contenu')
    <h2> Nouvelle chanson </h2>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/chanson/create" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nom" required placeholder="Le nom..." value="{{old('nom')}}"/> <br/>
        <input type="file" name="chanson" required /> <br/>
        <input type="text" name="style" required placeholder="Le style..." value="{{old('style')}}"/> <br/>
        <input type="submit" value="GO" />
    </form>

@endsection
