@extends('layouts/app') <!--reference to app.blade.php layout-->

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to {{$heading}}</h1>
        <!--or could write as - <h1>?php echo $heading; ?></h1>-->
        <p>This is the laravel application from the "Laravel From Scratch" Youtube series</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
           <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>            
    </div>
@endsection
