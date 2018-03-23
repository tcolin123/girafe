@extends ('layouts.base')
@section( ' title ' , ' h1 ' )
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" media="votre requete ici" href="css/base.css" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/base.css" type="text/css" rel="stylesheet"/>
</head>
<body>
        <form method="post">
            <input type="text" name="search" id="search" placeholder="Ta recherche">
            <input type="submit" name="submit" value="Rechercher">
            </br></br>
        </form>
    <?php
    if(isset($_POST['submit']))
    {
        $search = mysql_real_escape_string(htmlspecialchars(trim($_POST['search'])));

        if(empty($search))
        {
            echo "<span class='erreur'>Veuillez remplir ce champs</span>";
        }else if(strlen($search) ==1)
        {
            echo"<span class='erreur'>Trop court</span>";
        }else{
            function results($search)
            {
                // Pour les mots clé
                $search = preg_split('/[\s\-]/',$search);

                $count_keywords = count($search);

                foreach($search as $key=>$searches)
                {
                    $where .= "laravel LIKE '%$searches%'";
                    if($key != ($count_keywords-1))
                    {
                        $where .=" AND ";
                    }
                }
            }
        }
    }
    ?>
</body>
</html>
   <table id="media">
       <tr>
            <th>Genre</th>
            <th>Artiste</th>
            <th>Nom de la musique</th>
            <th>Supprimer</th>
            <th>Modifier</th>
       </tr>
    @foreach($objets as $objet)

        <tr>
	       <td> {{ $objet['Name'] }} </td>
 	       <td> {{ $objet['Valeur1'] }}</td>
           <td> {{ $objet['Valeur2'] }}</td>
            <td>
                {{ Form::open(['url' => '/delate']) }}
                {{ Form::hidden('id', $objet['id']) }}
                {{ Form::submit('X') }}
                {{ Form::close() }}
            </td>

            <td>
                {{ Form::open(['url' => '/maj', 'method' => 'post']) }}
                {{ Form::hidden('id', $objet['id']) }}
                {{ Form::submit('Mise à jour') }}
                {{ Form::close() }}
            </td>
        </tr>
        
    @endforeach
</table>
@endsection