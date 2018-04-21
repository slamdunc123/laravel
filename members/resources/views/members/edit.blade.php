<!-- edit.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.5 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit A Member</h2><br  />
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      <form method="post" action="{{action('MemberController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="fName">First Name:</label>
            <input type="text" class="form-control" name="fName" value="{{$member->fname}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="lName">Last Name:</label>
              <input type="text" class="form-control" name="lName" value="{{$member->lname}}">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="age">Age:</label>
                <input type="text" class="form-control" name="age" value="{{$member->age}}">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="{{$member->email}}">
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update Member</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>