

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>

      <link rel="stylesheet" href="{{asset('loginfolder/css/style.css')}}">

</head>

<body>
  <!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>

<div class="container" >
  <div class="profile">

    <button class="profile__avatar2" id="toggleProfile2">
     <img src="{{asset('img/team/01.jpg')}}" alt="Avatar" />
    </button>
    <button class="profile__avatar" id="toggleProfile">
     <img src="{{asset('img/team/01.jpg')}}" alt="Avatar" />
    </button>


    <div class="profile__form">
      <form class="" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
      <div class="profile__fields" >
        <div class="field">

          <input id="fieldUser" type="email" class="form-control input" pattern=.*\S.* name="email" value="{{ old('email') }}" required autofocus>
          <label for="fieldUser" class="label">Username</label>

          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif

        </div>
        <div class="field">

          <input id="fieldPassword" type="password" pattern=.*\S.* class="form-control input" value="{{ old('password') }}" name="password" required>
          <label for="fieldPassword" class="label">Password</label>

          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif


        </div>
        <div class="field">
        <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
        </label>
      </div>
        <div class="profile__footer">

          <button type="submit" class="btn btn-primary col-md-12">
              Login
          </button><br>
          <a class=" btn-link col-md-12"  href="{{ route('password.request') }}">
              Forgot Your Password?
          </a>
        </div>

      </div>
    </form>
     </div>
  </div>
</div>

    <script  src="{{asset('loginfolder/js/index.js')}}"></script>

</body>
</html>
