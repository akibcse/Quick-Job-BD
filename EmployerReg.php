<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="img/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
<title>Employer Registration</title>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css"/>
  
<style >
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
  
/* Remove the navbar's default margin-bottom and rounded borders */ 
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
    
  }
  
  /* Add a gray background color and some padding to the footer */
  footer {
    background-color: #f2f2f2;
    padding: 50px;
  }


 



</style>

    
</head>

<body>

<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//Name
						["minlen=1",
		"Please Enter Company Name"
						  ]
					
                     ],
                   [//Contact Person
						  ["minlen=1",
		"Please Enter Contact Person"
						  ]
						  
                   ],
				   [//Address
						["minlen=1",
		"Please Enter Address"
						  ] 					  				
                   ],
                   [//City
						["minlen=1",
		"Please Enter City"
						  ] 					  				
                   ],
				   [//Email
						  
						["minlen=1",
		"Please Enter Email "
						  ], 
						  ["email",
		"Please Enter valid email "
						  ]  
                   ],
				   [//Mobile
						   ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ] 	  
                   ],
				   [//Area
						  
					  ["minlen=1",
		"Please Enter Area of Work"
						  ] 	
								 
						  
                   ],
				
				   [//User
						  ["minlen=1",
		"Please Enter UserName "
						  ]
						 
						  
                   ],
				   [//Password
						["minlen=1",
		"Please Enter Password "
						  ]  
						  
						  
                   ],
				    [//Que
						  
						
                   ],
				    [//Answer
						  
						  ["minlen=1",
		"Please Enter Answer "
						  ]
						  
                   ]
				   
            ];
</SCRIPT>


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
  <a class="btn btn-danger float-left" a href="JobSeekerReg.php" role="button"> Signup as Job Seeker? </a></button>
</div>




            <!-- Article -->
          
            <div class="container">
            
            <div class="row">
            <div class="col-md-5">
            <h2><a href="#">Employer Registration Form</a></h2>
                
               <div class="login">

                <form action="EmployeInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <table width="100%"  cellspacing="0" cellpadding="0">
                    <tr>
                      <td>Company Name:</td>
                      <td><span id="sprytextfield3">
                        <label>
                        <input type="text" name="txtName" id="txtName" placeholder="Enter Comapny Name">
                        </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                   
                    <tr>
                      <td>Representative Name:</td>
                      <td><span id="sprytextfield8">
                        <label>
                        <input type="text" name="txtPerson" id="txtPerson" placeholder="Enter Representative Name" />
                        </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                    <tr>
                      <td>Address:</td>
                      <td><span id="sprytextarea1">
                        <label>
                        <textarea name="txtAddress" id="txtAddress" cols="45" rows="5" placeholder="Enter Address"></textarea>
                        </label>
                      <span class="textareaRequiredMsg">Enter Address</span></span></td>
                    </tr>
                    <tr>
                      <td>City:</td>
                      <td><span id="sprytextfield4">
                        <label>
                        <input type="text" name="txtCity" id="txtCity" placeholder="Enter City" />
                        </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td><span id="sprytextfield5">
                        <label>
                        <input type="text" name="txtEmail" id="txtEmail" placeholder="Enter Email"/>
                        </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                    <tr>
                      <td>Mobile:</td>
                      <td><span id="sprytextfield6">
                        <label>
                        <input type="text" name="txtMobile" id="txtMobile" placeholder="Enter Mobile +880 xxx xxx xxxx" />
                        </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                    <tr>
                      <td>Area of Work: </td>
                      <td><span id="sprytextfield7">
                      <input type="text" name="txtAreaWork" id="txtAreaWork" placeholder="Enter Area of Work" />
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                    <tr>
                      <td>User Name:</td>
                    <td><span id="sprytextfield9">
                        <label>
                        <input type="text" name="txtUserName" id="txtUserName" placeholder="Enter User Name" />
                        </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                    <tr>
                      <td>Password:</td>
                      <td><label><span id="sprytextfield10">
                        <input type="password" name="txtPassword" id="txtPassword" placeholder="Enter Password" />
                      <span class="textfieldRequiredMsg"></span></span></label></td>
                    </tr>
                    <tr>
                      <td>Security Question:</td>
                     <td><select name="cmbQue" id="cmbQue">
                        <option>What is Your Pet Name?</option>
                       <option selected="selected">Who is Your Favourite Person?</option>
                        <option>What is the Name of Your First School?</option>
                                                                  </select></td>
                    </tr>
                    <tr>
                      <td>Answer:</td>
                     <td><span id="sprytextfield11">
                      <label>
                      <input type="text" name="txtAnswer" id="txtAnswer" placeholder="Enter Answer...."/>
                      </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <div align="center">
                          <input type="submit" name="button2" id="button2" value="Submit" />
                          </div>
                      </label></td>
                    </tr>
                  </table>
                 </form>
              </div>
            </div>
            </div>
              <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->
 

<script type="text/javascript">

var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");

</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
