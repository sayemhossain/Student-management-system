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
  <title>Search Student</title>

  <!-- css file link -->
  <link rel="stylesheet"  href="search.css">
</head>

<body>

  <div class="container">
    <h3 class="text-center text-white heding-all" style="font-family: 'Acme',
        sans-serif;">Search <span class="text-warning">Student</span></h3>
    <hr class="m-auto text-white">


    <div class="container mt-5 pb-5">
      <form class="d-flex justify-content-center">
        <input class="form-control w-50 me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning" type="submit">Search</button>
      </form </div>


      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-12">
            <div class="card bg-light">
              <div class="card-body">

                <div class="card-title text-center m-auto py-5 my-4">
                  <div class="image-container">
                    <img src="public/images/sayem.jpg" id="imgProfile" style="width: 150px;
                      height: 150px" class="rounded-circle" />
                  </div>
                  <div class="mt-3 userData">
                    <h2 class="text-warning" style="font-size: 1.5rem;
                      font-weight: bold; font-family:
                      'Acme', sans-serif;">
                      SHAYEM HOSSAIN</h2>
                    <h6 class="text-white" style="font-family: 'Teko',
                      sans-serif;">Junior Web Developer
                    </h6>
                    <h6 class="text-white" style="font-family: 'Acme',
                      sans-serif;">Daffodil International University</h6>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <ul class="nav nav-tabs mb-4">
                      <li class="nav-item">
                        <a class="nav-link active
                          bg-black text-white" href="#">Student Info</a>
                      </li>
                    </ul>
                    <div class="content ml-1" id="myContent">
                      <div class="tab-pane fade show
                        active" id="basicInfo" role="panel" aria-labelledby="basicInfo">
                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Full
                              Name :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Shayem Hossain
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Date
                              of Birth :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            February 08, 1999.
                          </div>
                        </div>
                        <hr />


                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Department
                              :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Place
                              of Birth :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Gender
                              :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Blood
                              Group :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Religion
                              :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Nationality
                              :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Mobile
                              :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Email
                              :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <ul class="nav nav-tabs mb-4">
                          <li class="nav-item">
                            <a class="nav-link
                              active bg-primary
                              text-white" href="#">Guardian
                              Info</a>
                          </li>
                        </ul>

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Father's
                              Name :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Father
                              Contact No :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Father
                              Occupation :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Mother's
                              Name :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Mother
                              Occupation :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <ul class="nav nav-tabs mb-4">
                          <li class="nav-item">
                            <a class="nav-link
                              active bg-danger
                              text-white" href="#">Present
                              Address</a>
                          </li>
                        </ul>

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Address
                              :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Post
                              Office :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">District/City
                              :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Divison/State
                              :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Country
                              :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <ul class="nav nav-tabs mb-4">
                          <li class="nav-item">
                            <a class="nav-link
                              active bg-success
                              text-white" href="#">Permanent
                              Address</a>
                          </li>
                        </ul>

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Address
                              :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Post
                              Office :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">District/City
                              :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Divison/State
                              :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Country
                              :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>
                        <hr />

                        <div class="row">
                          <div class="col-sm-3
                            col-md-2 col-5">
                            <label style="font-weight:bold;">Hostel
                              Address :</label>
                          </div>
                          <div class="col-md-8 col-6">
                            Something
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>

</body>

</html>