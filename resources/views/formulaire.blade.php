<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulaire</title>
</head>

<body>
    <div class="form" style="margin-left: 40%; margin-top: 10%;">
        <form action="/clients" method="post">
            @csrf
            <label for="name">Name</label><br>
            <input type="text" name="name" @error('name') is-invalid @enderror /><br>
            <label for="tel">Tel</label><br>
            <input type="text" name="tel" /><br>
            <button type="submit">Envoyer</button>
        </form>
    </div> <br> <br>

</body>

</html>