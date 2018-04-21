<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th>Email</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($members as $member)
      <tr>
        <td>{{$member['id']}}</td>
        <td>{{$member['fname']}}</td>
        <td>{{$member['lname']}}</td>
        <td>{{$member['age']}}</td>
        <td>{{$member['email']}}</td>
        <td><a href="{{action('MemberController@edit', $member['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('MemberController@destroy', $member['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>