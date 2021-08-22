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
              @if($LoggedUserInfo['profession']==="Teacher")
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
                <a class="nav-link" aria-current="page" href="{{url('/dashboard')}}"
                  >All Courses</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/my-courses')}}"
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
      <section class="my-5 pt-5">
        <div class="container">
          <h3>My Courses of this Semester</h3>

          <div id="mycourse"
            class="
              row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 g-4"
          >
          @if($LoggedUserInfo['profession']==="Teacher")
            <?php 
              $conn = mysqli_connect('localhost', 'root', '', 'e-learn') or die(mysqli_error($conn));
              $teacher_id = $LoggedUserInfo['id'];
               $data= "SELECT * from courses WHERE instructor=$teacher_id";
               $result = $conn -> query($data) or die($conn->error);
              //  $img = $result->fetch_assoc(); 
                // $image= $img["name"];
            ?>
            <!-- <div class="col"> -->
              <!-- <a
                href="{{url('/details')}}"
                class="text-decoration-none text-dark"
              > -->
            <?php while ($row = $result->fetch_assoc()):?>
              <div class="col">
              <div class="card p-2 mx-auto" style="width: 15rem">
                <a
                  href="/details/<?php echo $row['id'];?>"
                  class="text-decoration-none text-dark"
                >
                  <img
                    src="{{asset('media/courses/'.$row['banner'])}}"
                    class="card-img-top card_img"
                    alt="..."
                  />
                </a>
                <div class="card-body d-flex justify-content-between">
                  <div class="mt-3">
                    <a
                      href="/details/<?php echo $row['id'];?>"
                      class="text-decoration-none text-dark"
                    >
                    <!-- class="d-inline-block text-truncate m-0" style="max-width: 50px;"> -->
                      <h6 class="card-title mb-1 text-truncate" style="max-width: 200px;">
                        <?php echo $row['name'];?>
                      </h6>
                      <p><?php echo $row['c_code'];?>(<?php echo $row['section'];?>)</p>
                    </a>
                     <a href="#" class="btn disabled btn-light m-auto">Joined</a>
                      <a href="handle.php?delete=<?php echo $row['id']?>" id="remove" class="delete btn btn-danger m-auto">Remove</a>
                  </div>
                  <img
                  src="<?php echo $LoggedUserInfo['image']; ?>"
                  class="w-25 rounded-circle border border-2 instructor"
                  alt="instructor"
                  />
                </div>
              </div>
            </div>
          <?php endwhile; ?>
            @else
               <section class="my-5 pt-5">
                  <div class="w-100">
                    <div
                      class=" 
                        row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2
                        g-4
                      "
                    >
                      <div class="col">
                        <a
                          href="course_details.html"
                          class="text-decoration-none text-dark"
                        >
                          <div class="card p-2 mx-auto" style="width: 15rem">
                            <img src="http://127.0.0.1:8000/media/courses/1629324553.png" class="card-img-top" alt="..." />
                            <div class="card-body d-flex justify-content-between">
                              <div class="mt-3">
                                <h6 class="card-title text-start mb-1 text-truncate overflow-hidden">
                                 Artificial Inteligence
                                </h6>
                                <h6>CSE122(C)</h6>
                                <a href="#" class="btn disabled btn-light mx-auto">Joined</a>
                              </div>
                              <img
                                src="images/Instructors/rima.jpg"
                                class="w-25 rounded-circle border border-2 instructor"
                                alt="instructor"
                              />
                            </div>
                          </div>
                        </a>
                      </div>

                    </div>
                  </div>
                </section>
            @endif

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

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
    <script src="/js/index.js"></script>
  </body>
</html>
