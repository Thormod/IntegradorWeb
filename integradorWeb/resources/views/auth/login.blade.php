@extends('layouts.app')

@section('content')

<section class="content-wrap full youplay-login">

  <!-- Banner -->
  <div class="youplay-banner banner-top">
    <div class="image" style="background-image: url('images/Banner-bg.png')"></div>

    <div class="info">
      <div>
        <div class="container align-center">
          <div class="youplay-form">
            <h1>SIGN-IN</h1>
            <!--
            <div class="btn-group social-list dib">
              <a class="btn btn-default" title="Share on Facebook" href="#!"><i class="fa fa-facebook"></i></a>
              <a class="btn btn-default" href="#!" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
              <a class="btn btn-default" href="#!" title="Share on Google Plus"><i class="fa fa-google-plus"></i></a>
            </div>
          -->

            <form  role="form" method="POST" action="{{ url('/login') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                  <div class="youplay-input">
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                  </div>

                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>


              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="youplay-input">
                  <input type="password" id="password" name="password" required>
                </div>

                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-default db">
                      Login
                  </button>
                  <br><br>
                  <button class="btn btn-default db" href="{{ url('/password/reset') }}">
                      Forgot Your Password?
                  </button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Banner -->

</section>
@endsection
