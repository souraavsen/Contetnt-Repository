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
    <link rel="shortcut icon" href="/images/logos/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="/css/style.css" />

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
                <a class="nav-link" aria-current="page" href="{{url('/dashboard')}}"
                  >All Courses</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url('/my-courses')}}"
                  >My Courses</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/contact">Contact</a>
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
    
    <main>
      <section>
        <div class="container my-5 pt-4">
          <img class="w-100 course_banner" src="{{asset('media/courses/'.$course_detail->banner)}}" alt="" />
          
          <div class="row">
            <h1 class="col text-center mt-5">{{$course_detail->name}}</h1>
            <a onclick="join({{$course_detail->id}})" id="{{$course_detail->id}}" class="col h-25 mt-5 me-4 btn fw-bold bg_blue col-md-1">Join</a>
          
          </div>

          <hr class="pt-1 my-5" />
          <div
            class="
              course_info
              container
              d-flex
              justify-content-evenly
              bg-white
              py-5
              mx-auto
              rounded-3
            "
          >
            <div class="details my-auto">
              <h4>Course Code: {{$course_detail->c_code}}</h4>
              <h4>Section: {{$course_detail->section}}</h4>
              <h4>Instructor: {{$instructor->name}}</h4>
              <p>Lecturer</p>
              <p>{{$instructor->dept}}</p>
              <p>{{$instructor->email}}</p>
            </div>
            <div class="image my-auto">
              <img
                class="m-auto rounded-circle"
                src="{{$instructor->image}}"
                alt=""
                height="150vh"
                width="150vh"
              />
            </div>
          </div>
        </div>
      </section>
       <?php 
              $conn = mysqli_connect('localhost', 'root', '', 'e-learn') or die(mysqli_error($conn));
              $data= "SELECT * from contents WHERE course_id=$course_detail->id";
              $result = $conn -> query($data) or die($conn->error);
              // $img = $result->fetch_assoc(); 
              // echo var_dump($img);
            ?>

      <!-- Using Accordion -->
      <section class="container mb-5 ">
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <?php while ($row = $result->fetch_assoc()):?>
          <div class="accordion-item my-3 p-2 border-3">
            <h2 class="accordion-header" id="panelsStayOpen-heading<?php echo $row['id'];?>">
              <button
                class="accordion-button collapsed fs-3"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapse<?php echo $row['id'];?>"
                aria-expanded="false"
                aria-controls="panelsStayOpen-collapse<?php echo $row['id'];?>"
              >
                <?php echo $row['title'];?>
              </button>
            </h2>
           
            <div
              id="panelsStayOpen-collapse<?php echo $row['id'];?>"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-heading<?php echo $row['id'];?>"
            >
              <div class="accordion-body">
                <div class="container my-2 pt-4">
                  <div class="bg-white px-lg-5 rounded-3">
                    <div>
                      <h2 class="pb-5"><?php echo $row['title'];?></h2>
                      <p>
                        <?php echo $row['des'];?>
                      </p>
                    </div>
                    <div class="mt-5">
                      <h5>video Lecture</h5>
                      <iframe 
                        width="560"
                        height="315"
                        src="<?php echo $row['video'];?>"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                      ></iframe>
                    </div>
                    <div class="content mt-5 fs-5">
                      <ul style="list-style-type: circle;">
                        <li>
                          <a
                            class="text-decoration-none"
                            href="<?php echo $row['content1'];?>"
                            target="_blank"
                            >Lecture-1</a
                          >
                        </li>
                        <li>
                          <a
                            class="text-decoration-none"
                            href="#"
                            target="_blank"
                            >Lecture-2</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>

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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
    <script src="/js/index.js"></script>
  </body>
</html>
