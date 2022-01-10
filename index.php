<!DOCTYPE html>
<html>

<head>
  <link rel="shortcut icon" href="img/favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Homepage</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;

    }


    footer {
      background-color: #f2f2f2;
      padding: 50px;
    }

    div{
      padding-bottom: 5px;
      padding-top: 5px;
    }
  </style>
</head>

<body>

  <!-- Image and text -->
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" a href="index.php">
      <img src="./img/logo.png" width="140" height="30" class="d-inline-block align-top" alt="index.php">
      
    </a>
  </nav>




  <!-- navbar -->
  <div class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" a href="index.php"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" a href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Top Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Top Employers</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              More
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="loginInt.php">Searching a Job?</a>
              <a class="dropdown-item" href="loginInt.php">Searching an Employee?</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" a href="JobSeekerReg.php">Don't have an account? Register Here as Job Seeker!</a>
              <a class="dropdown-item" a href="EmployerReg.php">Don't have an account? Register Here as Employer!</a>


            </div>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-success my-2 my-sm-0" a href="logininit.php" role="button">Login</a></button>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
  </div>

  <!-- SignUp and Login Button-->
  <div class="bg-info clearfix">
    <a class="btn btn-success float-left" a href="EmployerReg.php" role="button"> SignUp as Employer? </a></button>
    <a class="btn btn-danger float-right" a href="JobSeekerReg.php" role="button"> Signup as Job Seeker? </a></button>
  </div>



  <!-- slider -->
  <div class="container">
    <button type="button" class="btn btn-primary btn-lg btn-block">Gallery</button>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./img/banner1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/banner2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/banner3.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>





    <!-- Top Companies -->
    <button type="button" class="btn btn-danger btn-lg btn-block">Top Companies</button>
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">ACI</h5>
            <p class="card-text">Imperial Chemical Industries, a British multinational established a Branch in the then East Pakistan which was converted into a company after liberation, named ICI Bangladesh Manufacturers Limited. In 1992 ICI divested its investment in Bangladesh to the Management, when its name was changed to Advanced Chemical Industries (ACI) Limited.</p>
            <a href="https://www.aci-bd.com/" class="btn btn-primary">Read More </a>
          </div>
        </div>
      </div>
    
    <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">BEXIMCO</h5>
            <p class="card-text">Today the BEXIMCO Group ("BEXIMCO" or the "Group") is the largest private sector group in Bangladesh. BEXIMCO was founded in the 1970's by two brothers – Ahmed Sohail Fasihur Rahman and Salman Fazlur Rahman.</p>
            <a href="https://www.beximco.com/" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">BASHUNDHARA</h5>
            <p class="card-text">The Bashundhara Group has started operation as a real estate venture known as "Bashundhara" under the aegis of the group's first concern - the East-West Property Development (Pvt) Ltd in 1987.</p>
            <a href="http://www.bashundharagroup.com/" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">PRAN</h5>
            <p class="card-text">The journey of PRAN started from 1981 and its evolution to one of the top food manufacturing companies that have set the grounds for development for any potentialities.</p>
            <a href="https://www.pranfoods.net/" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>

      

    <div class="jumbotron text-center">
      <!-- Welcome! -->
      <h1>WELCOME!</h1>
      <p>Create Your Account and Earn Money!</p>
    </div>

    <button type="button" class="btn btn-warning btn-lg btn-block">News and Events</button>
    <div class="container">
      <!-- grids -->
      <div class="row">
        <div class="col-sm-4">
          <h3>Prothom Alo</h3>
          <a href="https://www.prothomalo.com/" class="btn btn-primary">Read News</a>
        </div>
        <div class="col-sm-4">
          <h3>Jugantor</h3>
          <p></p>
          <a href="https://www.jugantor.com/" class="btn btn-primary">Read News</a>
        </div>
        <div class="col-sm-4">
          <h3>Ittefaq</h3>
          <a href="https://www.ittefaq.com.bd/" class="btn btn-primary">Read News</a>
        </div>
      </div>

    </div>

    <!--gallery -->
    <button type="button" class="btn btn-success btn-lg btn-block">Catagories</button>
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="./img/g1.jpg">
            <img src="./img/g1.jpg" alt="Lights" style="width:100%">
            <div class="caption">
              <p>Software Engineering</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="./img/g2.jpg">
            <img src="./img/g2.jpg" alt="Nature" style="width:100%">
            <div class="caption">
              <p>Civil Engineering</p>
            </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="./img/g3.jpg">
            <img src="./img/g3.jpg" alt="Fjords" style="width:100%">
            <div class="caption">
              <p>Banking</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>









  <!--footer -->
  <footer class="container-fluid text-center text-white bg-dark">
    <p>All Right reserved By EU</p>
  </footer>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>