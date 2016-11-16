@extends('layouts.app')

@section('content')

  <section class="content-wrap">

      <!-- Banner -->
      <div class="youplay-banner banner-top youplay-banner-parallax small">
        <div class="image" style="background-image: url('images/ca3.jpg')">
        </div>

        <div class="info">
          <div>
            <div class="container">
              <h1>Blog</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- /Banner -->


      <div class="container youplay-news">

        <!-- News List -->
        <div class="col-md-9">

          @foreach($blogs as $blog)
            @include('layouts.post')
          @endforeach

          <!-- Pagination --
          <ul class="pagination">
            <li class="active"><a href="#!">1</a>
            </li>
            <li><a href="#!">2</a>
            </li>
            <li><a href="#!">3</a>
            </li>
            <li><a href="#!">4</a>
            </li>
            <li><a href="#!">Next</a>
            </li>
          </ul>
          <!-- /Pagination -->
        </div>
        <!-- /News List -->

        <!-- Right Side -->
        <div class="col-md-3">

          <!-- Side Search -->
          <div class="side-block">
            <p>Search by News:</p>
            <form action="search.html">
              <div class="youplay-input">
                <input type="text" name="search" placeholder="enter search term">
              </div>
            </form>
          </div>
          <!-- /Side Search -->
        </div>
        <!-- /Right Side -->

      </div>

      <!-- Footer -->
      <footer class="youplay-footer-parallax">
        <div class="wrapper" style="background-image: url('images/ca6.png')">

          <!-- Social Buttons -->
          <div class="social">
            <div class="container">
              <h3>Connect socially with <strong>Rift of War</strong></h3>

              <div class="social-icons">
                <div class="social-icon">
                  <a href="#!">
                    <i class="fa fa-facebook-square"></i>
                    <span>Like on Facebook</span>
                  </a>
                </div>
                <div class="social-icon">
                  <a href="#!">
                    <i class="fa fa-twitter-square"></i>
                    <span>Follow on Twitter</span>
                  </a>
                </div>
                <div class="social-icon">
                  <a href="#!">
                    <i class="fa fa-twitch"></i>
                    <span>Watch on Twitch</span>
                  </a>
                </div>
                <div class="social-icon">
                  <a href="#!">
                    <i class="fa fa-youtube-square"></i>
                    <span>Watch on Youtube</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- /Social Buttons -->

          <!-- Copyright -->
          <div class="copyright">
            <div class="container">
              <strong>A.R.R.D.I.L.L.A CORP.</strong> &copy; 2016. All rights reserved
            </div>
          </div>
          <!-- /Copyright -->

        </div>
      </footer>
      <!-- /Footer -->


    </section>
    <!-- /Main Content -->

@endsection
