<?php
session_start();
if(isset($_SESSION['$UserName'])){
	header('location:Admin/index.php');
} 
if(isset($_SESSION['$UserName_job'])){
	header('location:JobSeeker/index.php');
} 
if(isset($_SESSION['$UserName_emp'])){
	header('location:Employer/index.php');
} 
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="img/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<style>
 div{
      padding-bottom: 5px;
      padding-top: 5px;
    }
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
    
  }
  
 
  footer {
    background-color: #f2f2f2;
    padding: 50px;
  }

  form{
      border: 5 px;
  }
  



</style>
</head>
<body>

  <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" a href="index.php">
    <img src="./img/logo.png" width="140" height="30" class="d-inline-block align-top" alt="">
   
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
        <a class="dropdown-item" a href="EmployerReg.php">Don't have an account? Register as an Employer!</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" a href="JobseekerReg.php">Don't have an account? Register as a JobSeeker!</a>

          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Registration!
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="EmployerReg.php">Register As an Employer?</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" a href="JobSeekerReg.php">Register As an Job Seeker?</a>
        
        
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
  <a class="btn btn-success float-left" a href="EmployerReg.php" role="button">  SignUp as Employer? </a></button>
  <a class="btn btn-danger float-right" a href="JobSeekerReg.php" role="button"> Signup as Job Seeker? </a></button>
</div>


<div class="container">

    <div class="col-md-5">
    <div class="login">
    <div class="form-group">
                <form name="form1" method="post" action="login.php">
                <label for="exampleFormControlInput1">User Name</label>
                <span id="sprytextfield1">
                        <input type="text" name="txtUser" id="txtUser" autocomplete="off" placeholder="Username" class="form-control">
                        <span class="textfieldRequiredMsg"></span></span>
                        </div>

    <div class="form-group">
    <label for="exampleFormControlInput1">Password</label>
    <span id="sprytextfield2">
    <input type="password" name="txtPass" id="txtPass" autocomplete="off" placeholder="*****" class="form-control">
    <span class="textfieldRequiredMsg"></span></span>
                    
                    
    <div class="form-group">
    <label for="exampleFormControlSelect1">User type</label>
                
                        <select name="cmbUser" id="cmbUser" class="form-control">
                          <option value="JobSeeker">JobSeeker</option>
                          <option value="Employer" selected="selected">Employer</option>
                          <option value="Administrator">Administrator</option>
                          </select>
              
                    </div>
                    
                          <input type="submit" class="btn btn-primary" name="button" id="button" value="Login">
                          

      </form>
    </div>


</div>

</div>
</div>



<!--footer -->
<footer class="container-fluid text-center text-white bg-dark">
    <p>All Right reserved By Md. Akib Hasan</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>