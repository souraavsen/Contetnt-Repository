<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
    crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
    crossorigin="anonymous"
    />
    <link rel="shortcut icon" href="/images/logos/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="/css/style.css" />

    <title>Content Repository</title>
   </head>
   <body>
       <header>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg_lightgreen">
                <div class="container">
                <a class="navbar-brand" href="/"><img src="/images/logos/repologo.png" width="120px" alt=""></a>
                
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
                        class="nav-link "
                        aria-current="page"
                        href="{{url('/Sign-Up')}}"
                        >Sign Up</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                        class="nav-link active"
                        aria-current="page"
                        href="{{url('/login')}}"
                        >Sign In</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#process">Help</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
        </header>

   <section>
      <div class="container">
         <div class="row mx-auto" style="margin-top:15%">
            <div class="col-md-4 mx-auto bg-white rounded-3 shadow p-5 col-md-offset-4">
               <h4>Sign In</h4><hr>
               <form action="/login/check" method="post">
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
    </section>
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
   </body>
</html>