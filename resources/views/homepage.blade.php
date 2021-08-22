<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,900;1,300;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/css/style.css" />
    <link rel="shortcut icon" href="/images/logos/favicon.png" type="image/x-icon">

    <title>Content Repository</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg_lightgreen">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="/images/logos/repologo.png" width="120px" alt=""></a>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a
                  class="nav-link"
                  aria-current="page"
                  href="{{url('/Sign-Up')}}"
                  >Sign Up</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  aria-current="page"
                  type="button"
                  data-toggle="modal" 
                  data-target="#exampleModalCenter"
                  >Sign In</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#process">Help</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <main>
        <section class="container my-5 pt-5">
            <div class="row homepage pt-5">
                <div class="col-md-5 col-12 col-sm-12">
                <div class="hpage-text">
                    <h6 style="color: #FE5244;">Are you ready to Learn?</h6>
                    <h1 class="hpage-title">Learn Without<br>
                    <span> Limits </span>
                    </h1>
                    <p> We provide trainers, learners, and others involved in education with information, tools and resources to support and enhance education delivery and management.
                    </p>

                    <a href="/Sign-Up"><button class="bg_blue fw-bold border-0 px-3 py-2 rounded-pill">Get Started</button></a>
                </div>
                </div>

                <div class="col-md-7 col-12 col-sm-12">
                <div class="hpage-img">
                    <img src="images/homepageillus.gif" class="img-fluid" width="900" alt="">
                </div>
                </div>

            </div>
        </section>

        
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-footer">
                <button type="button" class="btn btn-danger px-2 py-1 my-0" data-dismiss="modal">🗙</button>
              </div>
              <div class="container">
                <div class="row mx-auto" >
                    <div class=" mx-auto bg-white rounded-3  p-5 col-md-offset-4">
                      <h4>Sign In</h4><hr>
                      <form action="{{url('/login/check')}}" method="post">
                          @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                          @endif
              
                      @csrf
                          <div class="form-group pb-4">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                          </div>
                          <div class="form-group pb-4">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                          </div>
                          <button type="submit" class="btn btn-block btn-primary mb-2">Sign In</button>
                          <br>
                          <a href="/Sign-Up">I don't have an account, create new</a>
                      </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <section id="process" class="instalation_process container my-5 py-5">
            <h2 class="section-title mt-5">Installaltion Process</h2>
            <div class="book-section" id="books"></div>
            <div class="row">
                <div class="col-md-3 col-12 col-sm-12">
                    <div class="box d-flex flex-column bd-highlight mb-3 align-items-center justify-content-center">

                    <div class="p-2 bd-highlight"><i class="fas fa-plus color_grn fa-5x"></i></div>
                    <div class="p-2 bd-highlight">
                        <h3>Step-1</h3>
                    </div>
                    <div class="pb-2 bd-highlight">
                        <p>Create Account</p>
                    </div>

                    </div>


                </div>
                <div class="col-md-3 col-12 col-sm-6">
                    <div class="box d-flex flex-column bd-highlight mb-3 align-items-center justify-content-center">

                    <div class="p-2 bd-highlight"><i class="fas fa-signature color_grn fa-5x"></i></div>
                    <div class="p-2 bd-highlight">
                        <h3>Step-2</h3>
                    </div>
                    <div class="pb-2 bd-highlight">
                        <p>Sign in</p>
                    </div>

                    </div>
                </div>
                <div class="col-md-3 col-12 col-sm-6">
                    <div class="box d-flex flex-column bd-highlight mb-3 align-items-center justify-content-center">

                    <div class="p-2 bd-highlight"><i class="fas fa-file-signature color_grn fa-5x"></i></div>
                    <div class="p-2 bd-highlight">
                        <h3>Step-3</h3>
                    </div>
                    <div class="pb-2 bd-highlight">
                        <p>Join Course</p>
                    </div>

                    </div>
                </div>
                <div class="col-md-3 col-12 col-sm-6">
                    <div class="box d-flex flex-column bd-highlight mb-3 align-items-center justify-content-center">

                    <div class="p-2 bd-highlight"><i class="far fa-play-circle color_grn fa-5x" ></i></div>
                    <div class="p-2 bd-highlight">
                        <h3>Step-4</h3>
                    </div>
                    <div class="pb-2 bd-highlight">
                        <p>Course Materials</p>
                    </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="container my-5 pb-5">
            <div class=" card text-center video-section">
                <div class="card-body">
                    <h5 class="card-title">Video Demonstration</h5>
                    <p class="card-text">Join the learning module to enhance your learning.</p>
                    <a href="#">
                      <iframe width="700" height="415" src="https://www.youtube.com/embed/wUaWNmL-Ztg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                </div>
            </div>
        </section>

        <!-- Carusaule Section -->
        <section class="container" style="margin-bottom: 15vh;">
      <h2 class="section_title">Latest Courses</h2>
      <hr />
      <div class=" owl-carousel owl-theme">
        <div class="item d-courses">
            <div class="d-course card p-2 mx-auto" style="width: 15rem">
                  <img src="/images/ds.jpg" class="card-img-top" alt="..." />
                  <div class="card-body d-flex justify-content-between">
                    <div class="mt-3">
                      <h6 class="card-title mt-2 mb-3">
                        Sumulation and Modeling
                      </h6>
                      <a href="#" class="btn btn-primary m-auto">Explore</a>
                    </div>
                    <img
                      src="/images/Instructors/rima.jpg"
                      class="w-25 rounded-circle border border-2 instructor"
                      alt="instructor"
                    />
                  </div>
                </div>
          </div>

          <div class="item d-courses">
            <div class="d-course card p-2 mx-auto" style="width: 15rem">
                  <img src="/images/ds.jpg" class="card-img-top" alt="..." />
                  <div class="card-body d-flex justify-content-between">
                    <div class="mt-3">
                      <h6 class="card-title mt-2 mb-3">
                        Sumulation and Modeling
                      </h6>
                      <a href="#" class="btn btn-primary m-auto">Explore</a>
                    </div>
                    <img
                      src="/images/Instructors/rima.jpg"
                      class="w-25 rounded-circle border border-2 instructor"
                      alt="instructor"
                    />
                  </div>
                </div>
          </div>

          <div class="item d-courses">
            <div class="d-course card p-2 mx-auto" style="width: 15rem">
                  <img src="/images/ds.jpg" class="card-img-top" alt="..." />
                  <div class="card-body d-flex justify-content-between">
                    <div class="mt-3">
                      <h6 class="card-title mt-2 mb-3">
                        Sumulation and Modeling
                      </h6>
                      <a href="#" class="btn btn-primary m-auto">Explore</a>
                    </div>
                    <img
                      src="/images/Instructors/rima.jpg"
                      class="w-25 rounded-circle border border-2 instructor"
                      alt="instructor"
                    />
                  </div>
                </div>
          </div>

          <div class="item d-courses">
            <div class="d-course card p-2 mx-auto" style="width: 15rem">
                  <img src="/images/ds.jpg" class="card-img-top" alt="..." />
                  <div class="card-body d-flex justify-content-between">
                    <div class="mt-3">
                      <h6 class="card-title mt-2 mb-3">
                        Sumulation and Modeling
                      </h6>
                      <a href="#" class="btn btn-primary m-auto">Explore</a>
                    </div>
                    <img
                      src="/images/Instructors/rima.jpg"
                      class="w-25 rounded-circle border border-2 instructor"
                      alt="instructor"
                    />
                  </div>
                </div>
          </div>

          <div class="item d-courses">
          <div class="d-course card p-2 mx-auto" style="width: 15rem">
                  <img src="/images/ds.jpg" class="card-img-top" alt="..." />
                  <div class="card-body d-flex justify-content-between">
                    <div class="mt-3">
                      <h6 class="card-title mt-2 mb-3">
                        Sumulation and Modeling
                      </h6>
                      <a href="#" class="btn btn-primary m-auto">Explore</a>
                    </div>
                    <img
                      src="/images/Instructors/rima.jpg"
                      class="w-25 rounded-circle border border-2 instructor"
                      alt="instructor"
                    />
                  </div>
                </div>
          </div>

          <div class="item d-courses">
            <div class="d-course card p-2 mx-auto" style="width: 15rem">
                  <img src="/images/ds.jpg" class="card-img-top" alt="..." />
                  <div class="card-body d-flex justify-content-between">
                    <div class="mt-3">
                      <h6 class="card-title mt-2 mb-3">
                        Sumulation and Modeling
                      </h6>
                      <a href="#" class="btn btn-primary m-auto">Explore</a>
                    </div>
                    <img
                      src="/images/Instructors/rima.jpg"
                      class="w-25 rounded-circle border border-2 instructor"
                      alt="instructor"
                    />
                  </div>
                </div>
          </div>

          <div class="item d-courses">
            <div class="d-course card p-2 mx-auto" style="width: 15rem">
                  <img src="/images/ds.jpg" class="card-img-top" alt="..." />
                  <div class="card-body d-flex justify-content-between">
                    <div class="mt-3">
                      <h6 class="card-title mt-2 mb-3">
                        Sumulation and Modeling
                      </h6>
                      <a href="#" class="btn btn-primary m-auto">Explore</a>
                    </div>
                    <img
                      src="/images/Instructors/rima.jpg"
                      class="w-25 rounded-circle border border-2 instructor"
                      alt="instructor"
                    />
                  </div>
                </div>
          </div>

          <div class="item d-courses">
            <div class="d-course card p-2 mx-auto" style="width: 15rem">
                  <img src="/images/ds.jpg" class="card-img-top" alt="..." />
                  <div class="card-body d-flex justify-content-between">
                    <div class="mt-3">
                      <h6 class="card-title mt-2 mb-3">
                        Sumulation and Modeling
                      </h6>
                      <a href="#" class="btn btn-primary m-auto">Explore</a>
                    </div>
                    <img
                      src="/images/Instructors/rima.jpg"
                      class="w-25 rounded-circle border border-2 instructor"
                      alt="instructor"
                    />
                  </div>
                </div>
          </div>

          <div class="item">
            <div class="card p-2 mx-auto" style="width: 15rem">
                  <img src="/images/ds.jpg" class="card-img-top" alt="..." />
                  <div class="card-body d-flex justify-content-between">
                    <div class="mt-3">
                      <h6 class="card-title mt-2 mb-3">
                        Sumulation and Modeling
                      </h6>
                      <a href="#" class="btn btn-primary m-auto">Explore</a>
                    </div>
                    <img
                      src="/images/Instructors/rima.jpg"
                      class="w-25 rounded-circle border border-2 instructor"
                      alt="instructor"
                    />
                  </div>
                </div>
          </div>

        </div>
      </div>
    </section>

    </main>

     <footer>
      <div
        class="
          footer
          w-100
          container-fluid
          bg_lightgreen
          d-flex
          justify-content-around
          align-items-center
        "
      >
        <div class="ft_child w-25 mt-5 mb-auto">
          <div class="footer_logo mb-3">
            <img  src="/images/logos/repologo.png" width="180px" alt="">
          </div>
          <!-- <img src="$$" alt=""> -->
          <p>
            We provide trainers, learners, and others involved in education with information, tools and resources to support and enhance education delivery and management.
          </p>
        </div>
    
        <div class="ft_child w-25 mt-5 mb-auto">
          <h4>Destiny</h4>
          <ul>
            <li>Learn</li>
            <li>Practice</li>
            <li>Test</li>
            <li>Share</li>
          </ul>
        </div>
        <div class="ft_child w-25 mt-5 mb-auto">
          <h4>For any Support</h4>
          <div class="touch">
            <p><i class="fas fa-map-marked-alt pe-2"></i>Mirpur Road, Dhanmondi 27, Dhaka.</p>
            <p><i class="fas fa-envelope pe-2"></i>elearnteam@gmail.com</p>
            <p><i class="fas fa-phone-alt pe-2"></i>01475585885</p>
            <div>
              <a href="#"><img src="/images/install/facebook-icon.png" width="12%" alt=""></a>
              <a href="#"><img src="/images/install/linkedin-icon.png" width="12%" alt=""></a>
              <a href="#"><img src="/images/install/twitter-icon.png" width="12%" alt=""></a>
            </div>
          </div>
        </div>
      </div>
      <h6 class="text-center bg_lightgreen pb-4 py-4 m-0 fw-normal">
        content-repository©2021. All rights reserved to Content Repository
      </h6>
    </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script> -->

     <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    $(".owl-carousel").owlCarousel({
      loop: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      margin: 10,
      nav: false,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 3,
        },
      },
    });
  </script>
  </body>
</html>
