@extends('layouts.admin.empty')

@section('content')


  <body class="login-body">

    <div class="container">

       <form class="form-signin" role="form" method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}
        <h2 class="form-signin-heading">ADMIN Login</h2>
        <div class="login-wrap">

                       <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    
                            <div>
                                <input id="email" type="email" class="form-control" placeholder="Email" autofocus name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                        </div>




                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Mot de passe" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group">
                            <label class="checkbox">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                <span class="pull-right">
                                    <a data-toggle="modal" href="{{ route('password.request') }}"> Forgot Password?</a>

                                </span>
                            </label>

                        </div>
            <button class="btn btn-lg btn-login btn-block" type="submit">Login</button>
        </div>

      </form>

    </div>


@endsection
