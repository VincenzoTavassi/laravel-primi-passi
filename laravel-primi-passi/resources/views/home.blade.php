<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>{{$world}}</h1>
    
    <span>Array: </span>@foreach ($helloArray as $hello)
    @if (!$loop->last)<span>{{$hello}},</span>
    @else <span>{{$hello}}.</span>
    @endif
    @endforeach

<p><a href="{{route('prima-pagina')}}">Vai alla prima pagina</a></p>
<p><a href="{{route('seconda-pagina')}}">Vai alla seconda pagina</a></p>
</body>

</html>