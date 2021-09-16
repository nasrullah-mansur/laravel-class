<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>All Users</title>
  </head>
  <body>
    

    <div class="container">
        <h1 class="py-3">Create new user</h1>

      
        

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
              @error ('name')
                  <span class="text-danger">{{ $errors->first('name') }}</span>
              @enderror
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
              @error ('email')
                  <span class="text-danger">{{ $errors->first('email') }}</span>
              @enderror
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              @error ('password')
                  <span class="text-danger">{{ $errors->first('password') }}</span>
              @enderror
            </div>

            <div class="form-group">
              <label for="confirm">Confirm Password</label>
              <input type="password" class="form-control" name="con_password" id="confirm" placeholder="Confirm Password">
              @error ('con_password')
                  <span class="text-danger">{{ $errors->first('con_password') }}</span>
              @enderror
            </div>

            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

       
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>