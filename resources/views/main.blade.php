@extends('navbar')

@section('main-content')
@for ($i=0; $i < 5; $i++)
    <div class="card text-center" style="width: 18rem;">
        <img class="card-img-top" src="{{asset('img/Angry Birds Realistic.jpg')}}" alt="Green Bird">
        <div class="card-body">
            <h5 class="card-title">Green Bird</h5>
            <p class="card-text">A description of a green bird</p>
        </div>
    </div>
@endfor
@endsection
