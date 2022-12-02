<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListesClients</title>
</head>

<body>
    <div class="listeClients">
        <ul>
            @foreach($liste_clients as $client)
            <li>{{$loop->index +1}}-{{$client->name}}, {{$client->tel}}</li>
            @endforeach
        </ul>
    </div>
</body>

</html>