@extends('layouts.app')

@section('content')

<section class="content-wrap full youplay-login">

  <!-- Banner -->
  <div class="youplay-banner banner-top">
    <div class="image" style="background-image: url('images/Banner-bg3.jpg')"></div>

    <div class="info">
      <div>
        <div class="container align-center">
          <div class="youplay-form">
            <h1>SIGN-UP</h1>
            <!--
            <div class="btn-group social-list dib">
              <a class="btn btn-default" title="Share on Facebook" href="#!"><i class="fa fa-facebook"></i></a>
              <a class="btn btn-default" href="#!" title="Share on Twitter"><i class="fa fa-twitter"></i></a>
              <a class="btn btn-default" href="#!" title="Share on Google Plus"><i class="fa fa-google-plus"></i></a>
            </div>
          -->

            <form  ole="form" method="POST" action="{{ url('/register') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                  <div class="youplay-input">
                    <input type="name" id="name" name="name" value="{{ old('name') }}" placeholder="Username..." required autofocus>
                  </div>

                  @if ($errors->has('name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="youplay-input">
                  <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail" required>
                </div>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <div class="youplay-input">
                    <input id="password" type="password" name="password" placeholder="Password..." required>
                  </div>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
              </div>

              <div class="form-group">
                <div class="youplay-input">
                  <input id="password-confirm" type="password" name="password_confirmation" placeholder="Password confirmation..." required>
                </div>
              </div>



              <div class="form-group">
                  <button type="submit" class="btn btn-default db">
                      Register
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
