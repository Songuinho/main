<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

<body>
    <form action="/store" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="facture" /> <br />
        <input type="submit" value="Send">
    </form>

    @if($hasImage)
    <div class="list-images">
        <h1>images</h1>
        <ul>
            @foreach($list_images as $image )

            <li><img height="50px" width="50px" src="{{$image->path}}"> <a href="">Télécharger</a></li>
            @endforeach
        </ul>
    </div>
    @endif
</body>

</html>