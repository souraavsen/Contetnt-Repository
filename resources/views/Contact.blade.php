<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/72c31ce751.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/images/logos/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">

    <title>Content Repository</title>
    <style>
        .contact_card{
            border: none;
            border-radius: 20px;            
        }
        .varsity_id{
            color: rgb(71, 71, 71);
        }
        .social_link a{
            color: rgb(134, 134, 134);
        }

        .social_link a:hover{
            color: #00FF84;
        }

    </style>
</head>
<body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark text-white fixed-top bg_lightgreen">
        <div class="container">
          <a class="navbar-brand" href="/dashboard"><img src="/images/logos/repologo.png" width="120px" alt=""></a>
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
                @if($LoggedUserInfo["profession"]==="Teacher")
                <li class="nav-item">
                    <a
                      class="nav-link rounded-circle"
                      aria-current="page"
                      href="{{url('/create-course')}}"
                      title="Add Course"
                    >
                      <i class="fas fa-plus"></i
                    ></a>
                  </li>
                @endif

              <li class="nav-item">
                <a
                  class="nav-link "
                  aria-current="page"
                  href="{{url('/dashboard')}}"
                  >All Courses</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  aria-current="page"
                  href="{{url('/my-courses')}}"
                  >My Courses</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Contact</a>
              </li>
              <li class="nav-item">
                <div class="dropdown me-2">
                     <a
                      class="nav-link dropdown-toggle"
                      aria-current="page"
                      id="dropdownMenuButton1"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      href="#"
                      ><i class="fas fa-user-circle fs-3"></i
                    ></a>

                    <ul
                    class="dropdown-menu w-50"
                    aria-labelledby="dropdownMenuButton1"
                  >
                    <li><a class="dropdown-item" href="/my-profile">Profile</a></li>
                    <li>
                      <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/logout">Log out</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Help</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <section class="container my-5 py-5">
        <h3 class="fs-1 my-5 text-center">Meet The  <span class="color_grn">Developers</span></h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
            <div class="card bg-transparent h-100 contact_card">
                <img src="images/sourav.png" class="card-img-top w-50 mx-auto mt-3" alt="...">
                <div class="card-body">
                <h5 class="card-title text-center fw-normal">Sourav Sen Gupta</h5>
                <h5 class="card-title text-center fs-4 fw-bold varsity_id">182-15-11392</h5>
                <h3 class="text-muted social_link text-center">
                    <a href="https://www.facebook.com/souraavsen" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/shooaiib/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/moshoaib" target="_blank"><i class="fab fa-github"></i></a> 
                    </h3>
                <p class="card-text">This is Sourav Sen Gupta. Currently,I am doing B.Sc in CSE at Daffodil International University. Besides,I am doing Full Stack Web Development using many stacks. Creating something new always grabs my attention. I have created projects using Django, React, HTML, CSS, Js, JQuery, etc.</p>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card bg-transparent h-100 contact_card">
                <img src="images/mashud.png" class="card-img-top w-50 mx-auto mt-3" alt="...">
                <div class="card-body">
                <h5 class="card-title text-center fw-normal">Md. Abdullah Al Masud Siddque</h5>
                <h5 class="card-title text-center fs-4 fw-bold varsity_id">182-15-11471</h5>
                <h3 class="text-muted social_link text-center">
                    <a href="https://www.facebook.com/masud.siddque" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/shooaiib/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/moshoaib" target="_blank"><i class="fab fa-github"></i></a> 
                    </h3>
                <p class="card-text">A diligent and optimist student currently enrolled on B.Sc in CSE and hoping to attain good grades and embracing extra-curricular activities and societies in support, course, subject areas, and personal interest.I have knowledge in Graphic Design, Web Development, Database management etc.</p>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card bg-transparent h-100 contact_card">
                <img src="images/shoaib.png" class="card-img-top w-50 mx-auto mt-3" alt="...">
                <div class="card-body">
                <h5 class="card-title text-center fw-normal">Mohammad Shoaib</h5>
                <h5 class="card-title text-center fs-4 fw-bold varsity_id">182-15-11722</h5>
                <h3 class="text-muted social_link text-center">
                    <a href="https://www.facebook.com/shooaiib/" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/shooaiib/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/moshoaib" target="_blank"><i class="fab fa-github"></i></a> 
                    </h3>
                <p class="card-text">An enthusiastic Graphic Designer and Video Editor, currently working as a Creative Lead at Act for Displaced. I have over five years of experience working in different companies and independently as a freelancer.</p>
                </div>
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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
</body>
</html>