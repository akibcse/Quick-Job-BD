<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="img/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobseeker Registration</title>


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

	<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
	<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />



	<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">
		<tr>
			<td id="ds_calclass">
			</td>
		</tr>
	</table>

	<script type="text/javascript">
		
		// Set the initial date.
		var ds_i_date = new Date();
		ds_c_month = ds_i_date.getMonth() + 1;
		ds_c_year = ds_i_date.getFullYear();

		// Get Element By Id
		function ds_getel(id) {
			return document.getElementById(id);
		}

		// Get the left and the top of the element.
		function ds_getleft(el) {
			var tmp = el.offsetLeft;
			el = el.offsetParent
			while (el) {
				tmp += el.offsetLeft;
				el = el.offsetParent;
			}
			return tmp;
		}

		function ds_gettop(el) {
			var tmp = el.offsetTop;
			el = el.offsetParent
			while (el) {
				tmp += el.offsetTop;
				el = el.offsetParent;
			}
			return tmp;
		}

		// Output Element
		var ds_oe = ds_getel('ds_calclass');
		// Container
		var ds_ce = ds_getel('ds_conclass');

		// Output Buffering
		var ds_ob = '';

		function ds_ob_clean() {
			ds_ob = '';
		}

		function ds_ob_flush() {
			ds_oe.innerHTML = ds_ob;
			ds_ob_clean();
		}

		function ds_echo(t) {
			ds_ob += t;
		}

		var ds_element; // Text Element...

		var ds_monthnames = [
			'January', 'February', 'March', 'April', 'May', 'June',
			'July', 'August', 'September', 'October', 'November', 'December'
		]; // You can translate it for your language.

		var ds_daynames = [
			'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'
		]; // You can translate it for your language.

		// Calendar template
		function ds_template_main_above(t) {
			return '<table cellpadding="3" cellspacing="1" class="ds_tbl">' +
				'<tr>' +
				'<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>' +
				'<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>' +
				'<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Close]</td>' +
				'<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>' +
				'<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>' +
				'</tr>' +
				'<tr>' +
				'<td colspan="7" class="ds_head">' + t + '</td>' +
				'</tr>' +
				'<tr>';
		}

		function ds_template_day_row(t) {
			return '<td class="ds_subhead">' + t + '</td>';
			// Define width in CSS, XHTML 1.0 Strict doesn't have width property for it.
		}

		function ds_template_new_week() {
			return '</tr><tr>';
		}

		function ds_template_blank_cell(colspan) {
			return '<td colspan="' + colspan + '"></td>'
		}

		function ds_template_day(d, m, y) {
			return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';
			// Define width the day row.
		}

		function ds_template_main_below() {
			return '</tr>' +
				'</table>';
		}

		// This one draws calendar...
		function ds_draw_calendar(m, y) {
			// First clean the output buffer.
			ds_ob_clean();
			// Here we go, do the header
			ds_echo(ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
			for (i = 0; i < 7; i++) {
				ds_echo(ds_template_day_row(ds_daynames[i]));
			}
			// Make a date object.
			var ds_dc_date = new Date();
			ds_dc_date.setMonth(m - 1);
			ds_dc_date.setFullYear(y);
			ds_dc_date.setDate(1);
			if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
				days = 31;
			} else if (m == 4 || m == 6 || m == 9 || m == 11) {
				days = 30;
			} else {
				days = (y % 4 == 0) ? 29 : 28;
			}
			var first_day = ds_dc_date.getDay();
			var first_loop = 1;
			// Start the first week
			ds_echo(ds_template_new_week());
			// If sunday is not the first day of the month, make a blank cell...
			if (first_day != 0) {
				ds_echo(ds_template_blank_cell(first_day));
			}
			var j = first_day;
			for (i = 0; i < days; i++) {
				// make a new week.
			
				if (j == 0 && !first_loop) {
					// New week!!
					ds_echo(ds_template_new_week());
				}
				// Make a row of that day!
				ds_echo(ds_template_day(i + 1, m, y));
				// This is not first loop anymore...
				first_loop = 0;
				// What is the next day?
				j++;
				j %= 7;
			}
			// Do the footer
			ds_echo(ds_template_main_below());
			// And let's display..
			ds_ob_flush();
			// Scroll it into view.
			ds_ce.scrollIntoView();
		}

		// A function to show the calendar.
		// When user click on the date, it will set the content of t.
		function ds_sh(t) {
			// Set the element to set...
			ds_element = t;
			// Make a new date, and set the current month and year.
			var ds_sh_date = new Date();
			ds_c_month = ds_sh_date.getMonth() + 1;
			ds_c_year = ds_sh_date.getFullYear();
			// Draw the calendar
			ds_draw_calendar(ds_c_month, ds_c_year);
			// To change the position properly, we must show it first.
			ds_ce.style.display = '';
			// Move the calendar container!
			the_left = ds_getleft(t);
			the_top = ds_gettop(t) + t.offsetHeight;
			ds_ce.style.left = the_left + 'px';
			ds_ce.style.top = the_top + 'px';
			// Scroll it into view.
			ds_ce.scrollIntoView();
		}

		// Hide the calendar.
		function ds_hi() {
			ds_ce.style.display = 'none';
		}

		// Moves to the next month...
		function ds_nm() {
			// Increase the current month.
			ds_c_month++;
			// We have passed December, let's go to the next year.
			// Increase the current year, and set the current month to January.
			if (ds_c_month > 12) {
				ds_c_month = 1;
				ds_c_year++;
			}
			// Redraw the calendar.
			ds_draw_calendar(ds_c_month, ds_c_year);
		}

		// Moves to the previous month...
		function ds_pm() {
			ds_c_month = ds_c_month - 1; // Can't use dash-dash here, it will make the page invalid.
			// We have passed January, let's go back to the previous year.
			// Decrease the current year, and set the current month to December.
			if (ds_c_month < 1) {
				ds_c_month = 12;
				ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
			}
			// Redraw the calendar.
			ds_draw_calendar(ds_c_month, ds_c_year);
		}

		// Moves to the next year...
		function ds_ny() {
			// Increase the current year.
			ds_c_year++;
			// Redraw the calendar.
			ds_draw_calendar(ds_c_month, ds_c_year);
		}

		// Moves to the previous year...
		function ds_py() {
			// Decrease the current year.
			ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
			// Redraw the calendar.
			ds_draw_calendar(ds_c_month, ds_c_year);
		}

		// Format the date to output.
		function ds_format_date(d, m, y) {
			// 2 digits month.
			m2 = '00' + m;
			m2 = m2.substr(m2.length - 2);
			// 2 digits day.
			d2 = '00' + d;
			d2 = d2.substr(d2.length - 2);
			// YYYY-MM-DD
			return y + '-' + m2 + '-' + d2;
		}

		// When the user clicks the day.
		function ds_onclick(d, m, y) {
			// Hide the calendar.
			ds_hi();
			// Set the value of it, if we can.
			if (typeof(ds_element.value) != 'undefined') {
				ds_element.value = ds_format_date(d, m, y);
				// Maybe we want to set the HTML in it.
			} else if (typeof(ds_element.innerHTML) != 'undefined') {
				ds_element.innerHTML = ds_format_date(d, m, y);
				// I don't know how should we display it, just alert it to user.
			} else {
				alert(ds_format_date(d, m, y));
			}
		}

		// And here is the end.

		// ]]> -->
	</script>
	<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
	<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
	<SCRIPT language="JavaScript1.2">
		var arrFormValidation = [
			[ //Name
				["minlen=1",
					"Please Enter Name"
				]

			],
			[ //Address
				["minlen=1",
					"Please Enter Address"
				]

			],
			[ //City
				["minlen=1",
					"Please Enter City"
				]
			],
			[ //Email

				["minlen=1",
					"Please Enter Email "
				],
				["email",
					"Please Enter valid email "
				]
			],
			[ //Mobile
				["num",
					"Please Enter valid Mobile "
				],
				["minlen=10",
					"Please Enter valid Mobile "
				],
				["maxlen=10",
					"Please Enter valid Mobile "
				]
			],
			[ //Qual




			],
			[ //Other


			],
			[ //Gender


			],
			[ //Birthdate

				["minlen=1",
					"Please Enter Birthdate "
				]

			],
			[ //Upload

				["minlen=1",
					"Please Upload Marksheet "
				]
			],
			[ //User
				["minlen=1",
					"Please Enter UserName "
				]


			],
			[ //Password
				["minlen=1",
					"Please Enter Password "
				]


			],
			[ //Que


			],
			[ //Answer

				["minlen=1",
					"Please Enter Answer "
				]

			]

		];
	</SCRIPT>




	<!-- Image and text -->
	<nav class="navbar navbar-light bg-light">
		<a class="navbar-brand" a href="index.php">
			<img src="./img/logo.PNG" width="140" height="30" class="d-inline-block align-top" alt="">
			
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
  <a class="btn btn-success float-left" a href="EmployerReg.php" role="button">  SignUp as Employer? </a></button>
  
</div>



	<div class="container">
		<div class="row>">

			<div class="col-md-5">
				<h2><span><a href="#">Job Seeker Registration Form</a></span></h2>


				<div class="login">

					<form action="JobSeekerInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td>JobSeeker Name:</td>
								<td><span id="sprytextfield3">
										<label>
											<input type="text" name="txtName" id="txtName" placeholder="Enter Name" />
										</label>
										<span class="textfieldRequiredMsg"></span></span></td>
							</tr>

							<tr>
								<td>Address:</td>
								<td><span id="sprytextarea1">
										<label>
											<textarea name="txtAddress" id="txtAddress" cols="45" rows="5" placeholder="Enter Address"></textarea>
										</label>
										<span class="textareaRequiredMsg"></span></span></td>
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
											<input type="text" name="txtEmail" id="txtEmail" placeholder="Enter Email Id"/>
										</label>
										<span class="textfieldRequiredMsg"></span></span></td>
							</tr>
							<tr>
								<td>Mobile:</td>
								<td><span id="sprytextfield6">
										<label>
											<input type="text" name="txtMobile" id="txtMobile" placeholder="Enter Mobile +880"/>
										</label>
										<span class="textfieldRequiredMsg"></span></span></td>
							</tr>
							<tr>
								<td>Qualification:</td>
								<td><label>
										<input type="text" name="txtQualification" id="txtQualification" placeholder="Enter Qualification"/>
									</label>
									<span class="textfieldRequiredMsg"></span>
								</td>
							</tr>
							<tr>
								<td>Other:</td>
								<td><label>
										<input type="text" name="txtOther" id="txtOther" placeholder="Other..." />
									</label></td>
							</tr>
							<tr>
								<td>Gender:</td>
								<td><label>
										<select name="cmbGender" id="cmbGender">
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</label></td>
							</tr>
							<tr>
								<td>BirthDate:</td>
								<td><span id="sprytextfield7">
										<label>
											<input type="text" name="txtBirthDate" onclick="ds_sh(this);" id="txtBirthDate" placeholder="Enter Birth Date" />
										</label>
										<span class="textfieldRequiredMsg"></span></span></td>
							</tr>
							<tr>
								<td>Upload Marksheet:</td>
								<td><label>
										<input type="file" name="txtFile" id="txtFile" />
									</label></td>
							</tr>
							<tr>
								<td>User Name:</td>
								<td><span id="sprytextfield8">
										<label>
											<input type="text" name="txtUserName" id="txtUserName" placeholder="Enter User Name"/>
										</label>
										<span class="textfieldRequiredMsg"></span></span></td>
							</tr>
							<tr>
								<td>Password:</td>
								<td><label><span id="sprytextfield9">
											<input type="password" name="txtPassword" id="txtPassword" placeholder="Enter Password"/>
											<span class="textfieldRequiredMsg"></span></span></label></td>
							</tr>
							<tr>
								<td>Security Question:</td>
								<td><label>
										<select name="cmbQue" id="cmbQue">
											<option selected="selected">What is Your Pet Name?</option>
											<option>Who is Your Favourite Person?</option>
											<option>What is the Name of Your First School?</option>
										</select>
									</label></td>
							</tr>
							<tr>
								<td>Answer:</td>
								<td><span id="sprytextfield10">
										<label>
											<input type="text" name="txtAnswer" id="txtAnswer" placeholder="Enter Answer" />
										</label>
										<span class="textfieldRequiredMsg"></span></span></td>
							</tr>
							<tr>
								<td colspan="2"><label>
										<label></label>
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

		<p class="btn-more box noprint">&nbsp;</p>
	</div> <!-- /article -->

	<hr class="noscreen" />

	</div> <!-- /content -->



	<script type="text/javascript">
		var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
		var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
		var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
		var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
		var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
		var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
		var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
		var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
		var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
	</script>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</html>