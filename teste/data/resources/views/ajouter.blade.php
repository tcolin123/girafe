@extends ('layouts.base')
@section( ' title ' , ' h1 ' )
@section('content')
<h1>Offre</h1>
<div id="form">
    {!! Form::open(['url' => '/added']) !!}
   
    <div class="create">
    	{{ Form::label('Name', 'Genre')}}
    	{{ Form::text('Name', '...')}}
    </div>

    <div class="create">
    	{{ Form::label('Valeur1', 'Artiste')}}
    	{{ Form::text('Valeur1', '...')}}
    </div>

    <div class="create">
    	{{ Form::label('Valeur2', 'Nom de la musique')}}
    	{{ Form::text('Valeur2', '...')}}
    </div>

    <div class="create">
    	{{ Form::submit('Ajouter') }}
    </div>
   {!! Form::close() !!}

</div>
@endsection