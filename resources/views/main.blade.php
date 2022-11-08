@extends('navbar')

@section('main-content')
<link rel="stylesheet" href="css/main.css">
<body style="background-color: rgb(230, 230, 230);">
    <div class="title">
        <h1>{{$title}}</h1>
    </div>
    @for ($i=0; $i < 5; $i++)
    <div class="card text-center" style="width: 18rem; margin: 10px;">
        <img class="card-img-top" src="{{$image}}" alt="Green Bird">
        <div class="card-body">
            <h5 class="card-title">Green Bird</h5>
            <p class="card-text">A description of a green bird</p>
        </div>
    </div>
    @endfor
</body>
@endsection
