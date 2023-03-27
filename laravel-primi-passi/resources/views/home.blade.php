<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    @include('header')
    <div class="container my-5">
        <h1>{{$world}}</h1>
        
        <span>Array: </span>
        @foreach ($helloArray as $hello)
        @if (!$loop->last)<span>{{$hello}},</span>
        @else <span>{{$hello}}.</span>
        @endif
        @endforeach
        
        <p class="my-2"><a href="{{route('prima-pagina')}}">Vai alla prima pagina</a></p>
        <p class="my-2"><a href="{{route('seconda-pagina')}}">Vai alla seconda pagina</a></p>
        
    </div>
    </body>
</html>