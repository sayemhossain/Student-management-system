
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- font style add -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Acme&family=Akronim&family=Cookie&family=Gluten:wght@200&family=Pacifico&family=Permanent+Marker&family=Rubik+Beastly&family=Teko:wght@300&display=swap"
    rel="stylesheet">
  <title>Home</title>

  <!-- css file link -->
  <link rel="stylesheet"  type="text/css" href="home.css">
</head>

<body>

  <!-- navbar section start -->
  <section>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
      <div class="container-fluid ">
        <a class="navbar-brand" href="#"><i class="fas fa-user-graduate text-danger me-1"></i>E.SCH<span>OO</span>L</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item">
              <a class="nav-link text-black active" aria-current="page" href="#top">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="#department">Department</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="table.php">Student List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="profile.php">Student-Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-black" href="search.php">Search</a>
            </li>
          </ul>
          <hr>

          <div class="login text-center">
            <a href="login.php" class="mt-1 text-danger" style="text-decoration: none;"><i
                class="fas fa-sign-in-alt log-logo"></i><span class="log-text"> Login</span></a>
          </div>
        </div>
      </div>
    </nav>
  </section>
  <!-- navbar section end -->

  <!-- home section start -->
  <section>
    <div class="container-fluid bg-secondary">
      <div class="row">

        <div class="col-lg-6">
          <img src= "public/images/school1.png" class="home-img" alt="">
        </div>

        <div class="col-lg-6 mt-5 d-flex align-items-center
            justify-content-center text-center">

          <div>
            <h3 class="home-header">Welcome to our E.School</h3>
            <p class="home-text">Lorem ipsum dolor sit, amet consectetur
              adipisicing elit. Aliquam
              veniam in ipsum magnam eos voluptates possimus sunt quasi nisi
              dignissimos aspernatur, eveniet exercitationem nulla, rem
              perspiciatis nesciunt necessitatibus tempora qui?Lorem ipsum
              dolor sit amet consectetur, adipisicing elit. Error at excepturi
              optio asperiores eaque soluta facere. Expedita vitae illum
              repellendus?
            </p>
            <input type="submit" value="Read More" class="btn mb-5">
          </div>
        </div>
      </div>
    </div>
    <img src="public/images/wave/wave1.png" class="waveImg bg-secondary" alt="">
  </section>
  <!-- home section end -->

  <!-- department section start -->
  <section id="department" class="pt-5">
    <div class="container-fluid text-center my-5">
      <h3 class="text-center heding-all">Avaiable <span class="text-danger">Department</span></h3>
      <hr class="w-50 m-auto">

      <div class="row mt-5">
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card bg-light mb-5 mb-lg-5" style="width: 18rem;">
            <img src="public/images/deparment/science1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">SCIENCE</h5>
              <p class="card-text">Some quick example text to build on the
                card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card bg-light mb-5 mb-lg-5" style="width: 18rem;">
            <img src="public/images/deparment/commerce.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">COMMERCE</h5>
              <p class="card-text">Some quick example text to build on the
                card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card bg-light mb-5 mb-lg-5" style="width: 18rem;">
            <img src="public/images/deparment/arts.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">ARTS</h5>
              <p class="card-text">Some quick example text to build on the
                card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card bg-light mb-5 mb-lg-5" style="width: 18rem;">
            <img src="public/images/deparment/polytecnic.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">POLYTECHNIC</h5>
              <p class="card-text">Some quick example text to build on the
                card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- department section end -->

  <!-- current top student section start -->
  <section id="student-info" class="pt-5 bg-light">
    <div class="container-fluid text-center py-5">
      <h3 class="text-center heding-all">Currnet <span class="text-danger">Top</span> Students</h3>
      <hr class="w-50 m-auto">

      <div class="row mt-5">
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card bg-light mb-5 mb-lg-5" style="width: 18rem;">
            <img src="public/images/student1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Celia Newton</h5>
              <p class="card-text">Some quick example text to build on the
                card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">See Details</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card bg-light mb-5 mb-lg-5" style="width: 18rem;">
            <img src="public/images/student2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ralph Herrera</h5>
              <p class="card-text">Some quick example text to build on the
                card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">See Details</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card bg-light mb-5 mb-lg-5" style="width: 18rem;">
            <img src="public/images/student1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Guinevere Kennedy</h5>
              <p class="card-text">Some quick example text to build on the
                card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">See Details</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card bg-light mb-5 mb-lg-5" style="width: 18rem;">
            <img src="public/images/student2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Norman Abbott</h5>
              <p class="card-text">Some quick example text to build on the
                card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">See Details</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card bg-light mb-5 mb-lg-5" style="width: 18rem;">
            <img src="public/images/student2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Amanda Nunez</h5>
              <p class="card-text">Some quick example text to build on the
                card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">See Details</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card bg-light mb-5 mb-lg-5" style="width: 18rem;">
            <img src="public/images/student1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lincoln Garza</h5>
              <p class="card-text">Some quick example text to build on the
                card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">See Details</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card bg-light mb-5 mb-lg-5" style="width: 18rem;">
            <img src="public/images/student2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Minerva Sandoval</h5>
              <p class="card-text">Some quick example text to build on the
                card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">See Details</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 d-flex justify-content-center">
          <div class="card bg-light mb-5 mb-lg-5" style="width: 18rem;">
            <img src="public/images/student1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Fletcher Kelley</h5>
              <p class="card-text">Some quick example text to build on the
                card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn">See Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- current top student section start -->

  <!-- footer section start -->
  <section id="about" class="bg-secondary ">
    <img class="waveImg" src="public/images/wave/wave2.png" alt="">
    <div class="container-fluid pt-5  text-center text-md-start">
      <div class="row">
        <div class="col-lg-4 mb-3">
          <h5 class="text-black text-center footer-head">Social Media</h5>
          <div class="social-icon text-center pt-3">
            <a href="#"><img src="public/images/social-media/facebook-icon.png" alt=""></a>
            <a href="#"><img src="public/images/social-media/instagram-icon.png" alt=""></a>
            <a href="#"><img src="public/images/social-media/twitter-icon.png" alt=""></a>
            <a href="#"><img src="public/images/social-media/linkedin-icon.png" alt=""></a>
            <a href="#"><img src="public/images/social-media/whatsapp-icon.png" alt=""></a>
            <a href="#"><img src="public/images/social-media/snapchat-icon.png" alt=""></a>
          </div>

        </div>
        <div class="col-md-4 footer-box text-black mb-3">
          <h5 class="footer-head">Contact Us</h5>
          <p><i class="fa fa-map-marker style-icon pe-2"></i>Dhanmondi-32,
            Dhaka</p>
          <p><i class="fa fa-phone style-icon pe-2"></i>01766-069458</p>
          <p><i class="fas fa-envelope style-icon pe-2"></i>shayem15-12011@diu.edu.bd</p>
          <a href="logout.php" class="btn-2 text-white mt-5" style='text-decoration: none;'>Logout</a>

        </div>

        <div class="col-md-4 footer-box mb-3">
          <h5 class="footer-head text-black">Enroll Yourself</h5>
          
          <input type="email" class="form-control enroll" placeholder="Enter your email">
          <button type="button" class="btn-2 text-white mt-2">Submit</button>
        </div>

      </div>
      <hr class="bg-black">
      <p class="copyright text-center text-dark mb-0 pb-2">&copy; Copyright 2021 | Developed
        by (Shayem Hossain, Badhon shaha, Ismail Hossain)</p>
    </div>
  </section>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>