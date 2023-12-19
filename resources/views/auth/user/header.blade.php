<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +255 7186584 50</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> froliernest98@gmail.com.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://www.facebook.com/frolian.ernest.3/"><span class="mai-logo-facebook-f"></span></a>
              <a href="https://twitter.com/ErnestFrolian"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-whatsapp"></span></a>
              <a href="https://www.instagram.com/incfrol98expert/"><span class="mai-logo-instagram"></span></a>
              <a href="https://www.linkedin.com/in/frolian-ernest-9b0674246/"><span class="mai-logo-linkedin"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">Inc</span>-Centre</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" style="padding-right: 0px" class="form-control" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('sitedoctor')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('news')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('appointment')}}">Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact')}}">Contact</a>
            </li>

            <!----------------check user login -->
           
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{url('login')}}">Login </a>
            </li>

            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{url('register')}}">Register</a>
              </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>