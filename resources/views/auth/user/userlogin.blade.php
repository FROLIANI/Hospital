<!DOCTYPE html>
<html lang="en">
<head>
  
@include('auth.user.style')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +255 7186584 50</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> froliernest98@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-whatsapp"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
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
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
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


  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctors</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to Your Health <br> Center</h1>
            <p class="text-grey mb-4">Our centre is courage to provide essentials services that is important.Welcome All</p>
            <a href="about.html" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1"> 
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->


  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/doctor_1.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Noela Ernest</p>
              <span class="text-sm text-grey">Cardiology</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/doctor_2.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Noah Makali</p>
              <span class="text-sm text-grey">Dental</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/doctors/doctor_3.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Suniasa Makali</p>
              <span class="text-sm text-grey">General Health</span>
            </div>
          </div>
        </div>

        <div class="item">
            <div class="card-doctor">
              <div class="header">
                <img src="../assets/img/doctors/doctor_3.jpg" alt="">
                <div class="meta">
                  <a href="#"><span class="mai-call"></span></a>
                  <a href="#"><span class="mai-logo-whatsapp"></span></a>
                </div>
              </div>
              <div class="body">
                <p class="text-xl mb-0">Dr. Vicent Singo</p>
                <span class="text-sm text-grey">General Health</span>
              </div>
            </div>
          </div>

         <div class="item">
            <div class="card-doctor">
              <div class="header">
                <img src="../assets/img/doctors/doctor_3.jpg" alt="">
                <div class="meta">
                  <a href="#"><span class="mai-call"></span></a>
                  <a href="#"><span class="mai-logo-whatsapp"></span></a>
                </div>
              </div>
              <div class="body">
                <p class="text-xl mb-0">Dr. Sarah Sanyiwa</p>
                <span class="text-sm text-grey">General Health</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="page-section bg-light">
      <div class="container">
        <h1 class="text-center wow fadeInUp">Latest News</h1>
        <div class="row mt-5">
          <div class="col-lg-4 py-2 wow zoomIn">
            <div class="card-blog">
              <div class="header">
                <div class="post-category">
                  <a href="#">Covid19</a>
                </div>
                <a href="blog-details.html" class="post-thumb">
                  <img src="../assets/img/blog/blog_1.jpg" alt="">
                </a>
              </div>
  
              <div class="body">
                <h5 class="post-title"><a href="blog-details.html">Tuberculosis is moderate froze </a></h5>
                <div class="site-info">
                  <div class="avatar mr-2">
                    <div class="avatar-img">
                      <img src="../assets/img/person/person_1.jpg" alt="">
                    </div>
                    <span>Sehewa Jonathan</span>
                  </div>
                  <span class="mai-time"></span> week ago
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 py-2 wow zoomIn">
            <div class="card-blog">
              <div class="header">
                <div class="post-category">
                  <a href="#">Covid19</a>
                </div>
                <a href="blog-details.html" class="post-thumb">
                  <img src="../assets/img/blog/blog_2.jpg" alt="">
                </a>
              </div>
              <div class="body">
                <h5 class="post-title"><a href="blog-details.html">Recovery Room: News beyond the pandemic</a></h5>
                <div class="site-info">
                  <div class="avatar mr-2">
                    <div class="avatar-img">
                      <img src="../assets/img/person/person_1.jpg" alt="">
                    </div>
                    <span>Ally Juma</span>
                  </div>
                  <span class="mai-time"></span> 2 weeks ago
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 py-2 wow zoomIn">
            <div class="card-blog">
              <div class="header">
                <div class="post-category">
                  <a href="#">Covid19</a>
                </div>
                <a href="blog-details.html" class="post-thumb">
                  <img src="../assets/img/blog/blog_3.jpg" alt="">
                </a>
              </div>
              <div class="body">
                <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
                <div class="site-info">
                  <div class="avatar mr-2">
                    <div class="avatar-img">
                      <img src="../assets/img/person/person_2.jpg" alt="">
                    </div>
                    <span>Noah Ernest</span>
                  </div>
                  <span class="mai-time"></span> 2 months ago
                </div>
              </div>
            </div>
          </div>
  
          <div class="col-12 text-center mt-4 wow zoomIn">
            <a href="blog.html" class="btn btn-primary">Read More</a>
          </div>
  
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section">
      <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
  
        <form class="main-form" action="{{url('appointment')}}" method="POST">
         
          @csrf
          <div class="row mt-5 ">
  
            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
              <input type="text" name="name" class="form-control" placeholder="Full name">
            </div>
  
            <div class="col-12 col-sm-6 py-2 wow fadeInRight">
              <input type="text" name="email" class="form-control" placeholder="Email address">
            </div>
  
            <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
              <input type="date" name="date" class="form-control">
            </div>
  
            <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
              <select name="doctor" id="departement" class="custom-select">
               
                <option >--Select Doctor--</option>
                @foreach($doctor as $doctors )
                <option value="{{$doctors->name}}">{{$doctors->name}}--Speciality-- {{$doctors->specility}}</option>
                @endforeach
  
              </select>
            </div>
  
            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
              <input type="number" name="phone" class="form-control" placeholder="Phone number">
            </div>
  
            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
              <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message"></textarea>
            </div>
  
          </div>
  
          <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
      </div>
    </div> <!-- .page-section -->
  
  


    <footer class="page-footer">
      <div class="container">
        <div class="row px-md-3">
          <div class="col-sm-6 col-lg-3 py-3">
            <h5>Company</h5>
            <ul class="footer-menu">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Editorial Team</a></li>
              <li><a href="#">Protection</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-3 py-3">
            <h5>More</h5>
            <ul class="footer-menu">
              <li><a href="#">Terms & Condition</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Advertise</a></li>
              <li><a href="#">Join as Doctors</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-3 py-3">
            <h5>Our partner</h5>
            <ul class="footer-menu">
              <li><a href="#">Inc-Fitness</a></li>
              <li><a href="#">Inc-Drugs</a></li>
              <li><a href="#">Inc-Live</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-3 py-3">
            <h5>Contact</h5>
            <p class="footer-link mt-2">12 National House Centre(NHC) Street, Mpwapwa</p>
            <a href="#" class="footer-link">0718658450</a>
            <a href="#" class="footer-link">froliernest98@gmail.com</a>
  
            <h5 class="mt-3">Social Media</h5>
            <div class="footer-sosmed mt-3">
              <a href="https://www.linkedin.com/in/frolian-ernest-9b0674246/" target="https://www.linkedin.com/in/frolian-ernest-9b0674246/"><span class="mai-logo-linkedin"></span></a>
              <a href="https://www.facebook.com/frolian.ernest.3/" target="https://www.facebook.com/frolian.ernest.3/"><span class="mai-logo-facebook-f"></span></a>
              <a href="https://twitter.com/ErnestFrolian" target="https://twitter.com/ErnestFrolian"><span class="mai-logo-twitter"></span></a>
              <a href="https://www.instagram.com/incfrol98expert/" target="https://www.instagram.com/incfrol98expert/"><span class="mai-logo-instagram"></span></a>
              <a href="https://secure.skype.com/portal/profile" target="https://secure.skype.com/portal/profile"><span class="mai-logo-skype"></span></a>
  
            </div>
          </div>
        </div>
  
        <hr>
  
        <p id="copyright">Copyright &copy; 2023 <a href="https://frolian.solo.co.tz" target="_blank">Frolian Ernest</a>. All right reserved</p>
      </div>
    </footer>


   @include('auth.user.script')
  
</body>
</html>