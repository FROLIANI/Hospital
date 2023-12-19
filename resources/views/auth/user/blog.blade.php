<!DOCTYPE html>
<html lang="en">
<head>
  @include('auth.user.style')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('auth.user.header')

  <div class="page-section pt-5">
    <div class="container">

      @if(session()->has('message'))
      <div class ="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>

        {{session()->get('message')}}

      </div>
      @endif

      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{url('blog')}}">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">Scenario of the diseases cases in our centre</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="../assets/img/blog/blog_1.jpg" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">By</span> <a href="{{url('blog')}}">Admin</a>  
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <a href="{{url('blog')}}">22 November, 2023</a>
              </div>
              <span class="divider">|</span>
              <div>
                <a href="{{url('blog')}}">Inc-Centre</a>, <a href="{{url('blog')}}">NHC</a> 
              </div>
              <span class="divider">|</span>
              <div class="post-comment-count">
                <a href="{{url('blog')}}">8 Comments</a>
              </div>
            </div>
            <h2 class="post-title h1">List of case</h2>
            <div class="post-content">
              <p>chronic diseases have been reported much based to result from the laboratory. This involve both for Transimiable and non-transmable diseases.
                like malaria, STD's and TB.
              </p>

              <p>We encourage our community to make frequent to their health check up so that able to know the status
                of their healths and action to be taken on it. We provide counceling so that they can live peacefully and 
                prevent more cases.
              </p>
            </div>
            <div class="post-tags">
              <a href="{{url('blog')}}" class="tag-link">LifeStyle</a>
              <a href="{{url('blog')}}" class="tag-link">Diagnosis</a>
              <a href="{{url('blog')}}" class="tag-link">Treatment</a>
            </div>
          </article> <!-- .blog-details -->

          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="{{url('addcomment')}}" method="post" enctype="multipart/form-data">
             
              @csrf

            
              <div class="form-row form-group">
                <div class="col-md-6">
                  <label for="name">Full Name *</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="col-md-6">
                  <label for="email">Email Address *</label>
                  <input type="email" name="email" class="form-control" id="email" required>
                </div>
              </div>

              <div class="form-row form-group">
              <div class="col-md-6">
                <label for="phone">Phone Nunber</label>
                <input type="number" name="phone"  class="form-control" id="phone" required>
              </div>

              <div class="col-md-6">
                <label for="category">Preference category</label>
                <input type="text" name="category" class="form-control" id="category" required>
              </div>
            </div>
  
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="8" class="form-control" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn btn-primary">
              </div>
  
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="#" class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Type a keyword ">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div>
            <div class="sidebar-block">
              <h3 class="sidebar-title">List Category</h3>
              <ul class="categories">
                <li><a href="{{url('blog')}}">OPD<span>12</span></a></li>
                <li><a href="{{url('blog')}}">IPD <span>08</span></a></li>
                <li><a href="{{url('blog')}}">Radiology <span>03</span></a></li>
                <li><a href="{{url('blog')}}">Maternity <span>20</span></a></li>
                <li><a href="{{url('blog')}}">Laboratory <span>15</span></a></li>
              </ul>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Recent Updates</h3>
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/blog/blog_1.jpg" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="{{url('blog')}}">Increases of Health facilities has increased to our  centre</a></h5>
                  <div class="meta">
                    <a href="{{url('blog')}}"><span class="mai-calendar"></span> July 25, 2023</a>
                    <a href="{{url('blog')}}"><span class="mai-person"></span> Admin</a>
                    <a href="{{url('blog')}}"><span class="mai-chatbubbles"></span> 5</a>
                  </div>
                </div>
              </div>
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/blog/blog_2.jpg" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">Health staffs being being responsuble to their  works improved the services</a></h5>
                  <div class="meta">
                    <a href="{{url('blog')}}"><span class="mai-calendar"></span> August 12, 2023</a>
                    <a href="{{url('blog')}}"><span class="mai-person"></span> Admin</a>
                    <a href="{{url('blog')}}"><span class="mai-chatbubbles"></span> 12</a>
                  </div>
                </div>
              </div>
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/blog/blog_3.jpg" alt="image">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">Laboratory check planned to be improved to icreases fact treatment</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> November 5, 2023</a>
                    <a href="#"><span class="mai-person"></span> Admin</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Tag Diseases</h3>
              <div class="tagcloud">
                <a href="{{url('blog')}}" class="tag-cloud-link">Malaria</a>
                <a href="{{url('blog')}}" class="tag-cloud-link">TB</a>
                <a href="{{url('blog')}}" class="tag-cloud-link">food</a>
                <a href="{{url('blog')}}" class="tag-cloud-link">HIV & AIDS</a>
                <a href="{{url('blog')}}" class="tag-cloud-link">Sphyliss</a>
                <a href="{{url('blog')}}" class="tag-cloud-link">Gonorrohea</a>
                <a href="{{url('blog')}}" class="tag-cloud-link">Cancer</a>
                <a href="{{url('blog')}}" class="tag-cloud-link">Fungus</a>
              </div>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Paragraph</h3>
              <p>The taged diseases should make more priority to the community so to take action on how to go against it</p>
            </div>
          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

 

  @include('auth.user.footer')

      <hr>

    </div> <!-- .container -->
  </footer> <!-- .page-footer -->

  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  
  <script src="../assets/vendor/wow/wow.min.js"></script>
  
  <script src="../assets/js/theme.js"></script>
  
</body>
</html>