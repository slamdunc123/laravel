@extends("layouts/app")

@section("content")
    <a href="/posts" class="bt btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
        {{$post->id}}
        
    </div>
    <hr>
<small>Written on {{$post->created_at}}</small>
@endsection