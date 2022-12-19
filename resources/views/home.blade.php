@extends('layouts.app')

@section('title')
Home
@endsection

@section('content')

<section class="jumbo">
    <div class="p-5 mb-4  rounded-3">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-5 fw-bold">Custom jumbotron</h1>
            <p class="col-md-8 fs-4 m-auto my-3">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <button class="btn btn-primary btn-lg" type="button">Example button</button>
        </div>
    </div>
</section>
<section class="movies bg-light py-5">
    <div class="container text-center">
        <h1 class="mb-5">Movies</h1>
        <div class="row row-cols-3 g-4">
            @foreach($movies as $key => $movie)
            <div class="col {{$key === count($movies)-1 ? 'mx-auto' : ''}}">
                <div class="card text-center p-3 h-100 shadow">
                    <h4>{{$movie->title}}</h4>
                    <h6>{{$movie->original_title}}</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae maxime earum iure nam numquam quo enim corrupti facere aperiam. Necessitatibus recusandae error libero optio maiores.</p>
                    <h6>{{$movie->nationality}}</h6>
                    <h6>{{$movie->date}}</h6>
                    <h6>{{$movie->vote}}/10</h6>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection