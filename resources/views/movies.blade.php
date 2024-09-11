{{-- extends view/layouts/main.blade.php --}}
@extends('layouts.main')

@section('title')
movies
@endsection

@section('yeld1')
<h1>
    MOVIES
</h1>
<div style=" display:flex; flex-wrap:wrap; margin:0 auto">
    @foreach ($movies as $movie)
        <div class="card" style="width: 18rem;">
            <div class="card-header">
        {{$movie->title}}
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$movie->date}}</li>
            <li class="list-group-item">{{$movie->vote}}</li>
        </ul>
        </div>
    @endforeach

</div>
        
  
@endsection

@section('content')
<p>
    content
</p>
@endsection
