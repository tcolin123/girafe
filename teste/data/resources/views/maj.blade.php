@extends ('layouts.base')
@section( ' title ' , ' h1 ' )
@section('content')
<h1>Mise a jour</h1>
<div id="form">
    {!! Form::open(['url' => '/majObjet']) !!}
    {{ Form::hidden('id', $objet['id']) }}

    <div class="create">
    	{{ Form::label('Name', 'genre')}}
    	{{ Form::text('Name', $objet['Name'])}}
    </div>

    <div class="create">
    	{{ Form::label('Valeur1', 'artiste')}}
    	{{ Form::text('Valeur1', $objet['Valeur1'])}}
    </div>

    <div class="create">
    	{{ Form::label('Valeur2', 'Nom de la musique')}}
    	{{ Form::text('Valeur2', $objet['Valeur2'])}}
    </div>


    <div class="create">
    	{{ Form::submit('Mettre a jour') }}
    </div>
   {!! Form::close() !!}

</div>
@endsection