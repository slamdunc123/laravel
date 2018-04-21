@extends('layouts/app') <!--reference to app.blade.php layout-->

@section('content')
    <h1>{{$heading}}</h1>
    <p>This is the services page</p>
    @if(count($services) > 0)
        <ul class="list-group"> <!--bootstrap styling-->
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li><!--bootstrap styling-->
            @endforeach
        </ul>
    @endif    
@endsection