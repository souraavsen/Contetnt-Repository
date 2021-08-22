<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="shortcut icon" href="/images/logos/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/signup_style.css">


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
                  data-target="#exampleModalLong"
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

        <div class="main_container">
            <div class="title">Registration</div>
            <div class="content">
                <!-- /Sign-Up/save -->
                <form action="{{route('save')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                    @if(Session::get('success'))
                        <div style="color:green; padding:5px;background-color:#C3FDB8;">
                        {{ Session::get('success') }}
                        </div>
                    @endif

                    @if(Session::get('fail'))
                        <div style="color:red;">
                        {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text" name="name" placeholder="Enter your name" required>
                             <span style="color:red;">@error('name'){{ $message }} @enderror</span>
                        </div>
                        
                        <div class="input-box">
                            <span class="details">University Id</span>
                            <input type="text" name="universityid" placeholder="Enter your Student Id" required>
                             <span style="color:red;">@error('universityid'){{ $message }} @enderror</span>

                        </div>

                        <div class="input-box">
                            <span class="details">Department</span>
                            <input type="text" name="dept" placeholder="Enter your Department" required>
                            <span style="color:red;">@error('dept'){{ $message }} @enderror</span>

                        </div>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input id="email" type="email" name="email" placeholder="Enter your University email" required>
                            <p id="mail_type"></p>
                            <span style="color:red;">@error('email'){{ $message }} @enderror</span>

                        </div>
                        <div class="input-box">
                            <span class="details">Password</span>
                            <input id="pass" type="password" name="password" placeholder="Enter your password" required>
                            <p id="pass_type"></p>
                            <span style="color:red;">@error('password'){{ $message }} @enderror</span>

                        </div>
                        <div class="input-box">
                            <span class="details">Confirm Password</span>
                            <input id="con_pass" type="password" placeholder="Confirm your password" required>
                            <p id="pass_checker"></p>
                        </div>
                    <div class="profession-details">
                        <!-- <input type="radio" value="teacher" name="profession" id="dot-1"> -->
                        <input type="radio" value="Student" name="profession" id="dot-2" required >
                        <span style="color:red;">@error('profession'){{ $message }} @enderror</span>

                       
                        <span class="details">Profession</span>
                        <div class="category">

                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="profession">Student</span>
                            </label>
                        </div>
                        <label class="form-label" for="form4Example2">Upload Your Image</label>
                        <input type="file" name="image" id="form4Example2"
                            class="form-control" />
                    </div>
                    </div>

                    <div class="button">
                        <input type="submit" value="Sign Up">
                    </div>
                </form>
            </div>
        </div>

        
    
          <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="/js/index.js"></script>

    </body>
</html>
