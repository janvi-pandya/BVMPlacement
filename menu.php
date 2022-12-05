<?php session_start();?>
<head>
	<title>BVM Placement</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="Logo.png">
    <link rel="stylesheet" type="text/css" href="custom_format.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <base target="_self">
	<link href="pid/pidie-0.0.8.css" rel="stylesheet">
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
	    <div class="container-fluid">
	      <a class="navbar-brand" href="/">
	      	<img src="Logo.png" alt="..." class="logo">
	  	  </a>
	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-weight: bold;">
	          <li class="nav-item">
	            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	          </li>
	          <li class="nav-item dropdown">
				<div class="btn-group dropend">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
		              aria-expanded="false">About Us</a>
				<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="about_bvm.php">About BVM</a></li>
						<li><a class="dropdown-item" href="about_tpc.php">About TPC</a></li>
						<li><a class="dropdown-item" href="about_website.php">About Our Website</a></li>
				</ul>
				</div>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="contact_us.php">Contact Us</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="recruiting_companies.php" target="_self">Our Reqruiters</a>
	          </li>
	          <li class="nav-item dropdown">
				<div class="btn-group dropend">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
		              aria-expanded="false">
		              Placement History
		            </a>
		            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<li><a class="dropdown-item" href="https://bvmengineering.ac.in/Placement%20Details%20of%20Past%20Years/Placement_2019-20.pdf">2019-2020</a></li>
						<li><a class="dropdown-item" href="https://bvmengineering.ac.in/Placement%20Details%20of%20Past%20Years/Placement_2018-19.pdf">2018-2019</a></li>
						<li><a class="dropdown-item" href="https://bvmengineering.ac.in/Placement%20Details%20of%20Past%20Years/Placement_2017-18.pdf">2017-2018</a></li>
						<li><a class="dropdown-item" href="https://bvmengineering.ac.in/Placement%20Details%20of%20Past%20Years/Placement_2016-17.pdf">2016-2017</a></li>
						<li><a class="dropdown-item" href="https://bvmengineering.ac.in/Placement%20Details%20of%20Past%20Years/Placement_2015-16.pdf">2015-2016</a></li>
						<li><div class="dropdown-divider"></div></li>
	  					<li class="dropdown-submenu">
	  						<a class="dropdown-item dropdown-toggle" href="#"><b>Older</b></a>
	  						<ul class="dropdown-menu">
	  							
								<li><a class="dropdown-item" href="https://bvmengineering.ac.in/Placement%20Details%20of%20Past%20Years/2_placementrecords 2014-15_2.pdf">2014-2015</a></li>
								<li><a class="dropdown-item" href="https://bvmengineering.ac.in/Placement%20Details%20of%20Past%20Years/2_placement_record_final_2013-14.pdf">2013-2014</a></li>
								<li><a class="dropdown-item" href="https://bvmengineering.ac.in/Placement%20Details%20of%20Past%20Years/2012-'13 Placement Details.pdf">2012-2013</a></li>
					            <li><a class="dropdown-item" href="https://bvmengineering.ac.in/Placement%20Details%20of%20Past%20Years/2011-'12 Placement Details.pdf">2011-2012</a></li>
					            <li><a class="dropdown-item" href="https://bvmengineering.ac.in/Placement%20Details%20of%20Past%20Years/Placement_2010-11.pdf">2010-2011</a></li>
					            <li><a class="dropdown-item" href="https://www.bvmengineering.ac.in/Placement%20Details%20of%20Past%20Years/2009-'10%20Placement%20Details.pdf">2009-2010</a></li>
					            <li><a class="dropdown-item" href="https://www.bvmengineering.ac.in/Placement%20Details%20of%20Past%20Years/2008-'09%20Placement%20Details.pdf">2008-2009</a></li>
	  						</ul>
	  					</li>
			        </ul>
			      </div>
		      </li>
		  </ul>
      <!-- Button trigger modal -->
		      	<a class="btn btn-outline-dark btn-sm me-2" data-bs-target="#loginModal" data-bs-toggle="modal" data-bs-dismiss="modal">LOGIN</a>
			<!-- Login Modal -->
			<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h3 class="modal-title" id="loginModalLabel">Login</h3>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        <form method="POST" action="login.php">
					  <div class="mb-3">
					    <label for="loginInputEmail1" class="form-label">Email address</label>
					    <input type="email" class="form-control" name="email" id="loginInputEmail1" required>
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Password</label>
					    <input type="password" class="form-control" name="password" id="loginInputPassword1" required>
					  </div>
					  <!--<div class="mb-3 form-check">
					    <input type="checkbox" class="form-check-input" id="loginCheck1">
					    <label class="form-check-label" for="loginCheck1">Remember Me</label>
					  </div>-->
					  <input type="submit" class="btn btn-primary" name="login" value="Login">
					</form><br/>
					<a class="btn btn-sm btn-outline-dark" data-bs-target="#forgot_password_modal1" data-bs-toggle="modal" data-bs-dismiss="modal">Forgot Password?</a><br/>
					<p>Haven't registered yet?&emsp;<a data-bs-target="#modal1" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-outline-danger">Signup</a></p>
			      </div>
			    </div>
			  </div>
			</div>
			<div class="modal fade" id="forgot_password_modal1" tabindex="-1" aria-labelledby="forgot_password_modalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h3 class="modal-title" id="loginModalLabel">2-Steps Verification</h3>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
					<form method="post" action="OTP_mail.php">
						<div class="mb-3">
							<label for="email"><b>Enter Your E-Mail Address:</b></label>
							<input class="form-control" type="email" name="email" required>
						</div>
				</div>
				<div class="modal-footer">
		          <input class="btn btn-primary" type="submit" id="register" name="emailSubmit" value="NEXT">
		          </form>
		        </div>
			    </div>
			  </div>
			</div>
		<!--Student Signup modal-->
		<div class="bd-example">
		  <div class="modal fade" id="modal1" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
		    <div class="modal-dialog modal-lg">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h1 class="modal-title" id="exampleModalToggleLabel">Student Registration</h1>
		          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		        </div>
				<div class="modal-body">
			        <form method="POST" id="form1">
					<div class="mb-3">
					  <h3 class="modal-title center" id="exampleModalToggleLabel">Personal Details</h3>
					    <label for="loginInputEmail1" class="form-label">Full Name</label>
					    <input type="text" class="form-control" id="name" name="fname" required>
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Birth-Date</label>
					    <input type="date" class="form-control" id="bdate" name="dob" required>
					  </div>
					  <div class="mb-3">
						<label for="gender" class="form-label">Gender</label>&emsp;&emsp;
					  	<input class="form-radio-input" type="radio" name="gender" value="F" checked>Female
					  	&emsp;
					  	<input class="form-radio-input"  type="radio" name="gender" value="M">Male<br/>
					  </div>
				</div>
				<div class="modal-footer">
	        	<input type="submit" class="btn btn-primary" name="submit1" value="NEXT">
		        </form>
		       </div>
		      </div>
		    </div>
		  </div>
		  <?php 
		  if(isset($_REQUEST['submit1']))
        	{
        		$fname = $_REQUEST['fname'];
        		$dob = $_REQUEST['dob'];
        		$gender = $_REQUEST['gender'];
        		echo "<script type='text/javascript'>
					$(document).ready(function()
					{
						$('#modal1').modal('hide');	
						$('#modal2').modal('show');
					});
					</script>";
        	}
    	?>
		  <div class="modal fade" id="modal2" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" style="display: none;" aria-hidden="true">
		    <div class="modal-dialog modal-lg modal-dialog-scrollable">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h1 class="modal-title" id="exampleModalToggleLabel">Student Registration</h1>
		          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		        </div>
		        <div class="modal-body">
			        <form method="POST" id="form2">
			        <input type="hidden" name="fname" value="<?php echo $fname;?>">
			        <input type="hidden" name="dob" value="<?php echo $dob;?>">
			        <input type="hidden" name="gender" value="<?php echo $gender;?>">
			        <div class="mb-3">
			        	<h3 class="modal-title center" id="exampleModalToggleLabel">Educational Details</h3>
			        	<label for="loginId1" class="form-label">Student ID</label>
                		<input type="text" class="form-control" name="id" required>
    				</div>
    				<div class="mb-3">
    					<label class="form-label">Course</label>&emsp;&emsp;
     					<input class="form-radio-input" type="radio" name="course" value="B.Tech" checked>B.Tech&emsp;
						<input class="form-radio-input"  type="radio" name="course" value="M.Tech">M.Tech<br>
    				</div>
    				<div class="mb-3">
					    <label for="loginInputEmail1" class="form-label">Passing Year</label>
					    <select class="form-control" name="passing_year" required>
					    	<option value="2021">2021</option>
  							<option value="2022">2022</option>
						</select>
					  </div>
    				<div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Specialization</label>
					    <select class="form-control" name="specialization" required>
					    	<option value="Civil">Civil</option>
  							<option value="Computer">Computer</option>
  							<option value="Electrical">Electrical</option>
  							<option value="Electronics">Electronics</option>
  							<option value="Electronics & Communication">Electronics & Communication</option>
  							<option value="Information Technology">Information Technology</option>
  							<option value="Mechanical">Mechanical</option>
  							<option value="Production">Production</option>
						</select>
					  </div>
					  <div class="mb-3">
					    <label for="loginInputEmail1" class="form-label">CPI</label>
					    <input type="number" min=0 max=10 step="0.01" class="form-control" id="cpi" name="cpi" required>
					  </div>
					</div>
					<div class="modal-footer">
		        	<button class="btn btn-secondary" data-bs-target="#modal1" data-bs-toggle="modal" data-bs-dismiss="modal">BACK</button>
		        	<input type="submit" class="btn btn-primary" name="submit2" value="NEXT">
		        </form>
		       </div>
		      </div>
		    </div>
		  </div>
		  <?php 
		  if(isset($_REQUEST['submit2']))
        	{
        		$fname = $_REQUEST['fname'];
        		$dob = $_REQUEST['dob'];
        		$gender = $_REQUEST['gender'];
        		$id = $_REQUEST['id'];
        		$course = $_REQUEST['course'];
        		$passing_year = $_REQUEST['passing_year'];
        		$specialization = $_REQUEST['specialization'];
        		$cpi = $_REQUEST['cpi'];
        		echo "<script type='text/javascript'>
					$(document).ready(function()
					{
						$('#modal2').modal('hide');	
						$('#modal3').modal('show');
					});
					</script>";
        	}
    	?>
		  <div class="modal fade" id="modal3" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" style="display: none;" aria-hidden="true">
		    <div class="modal-dialog modal-lg">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h1 class="modal-title" id="exampleModalToggleLabel">Student Registration</h1>
		          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		        </div>
		        <div class="modal-body">
			        <form method="POST" id="form3" enctype="multipart/form-data">
					  	<input type="hidden" name="fname" value="<?php echo $fname;?>">
			        	<input type="hidden" name="dob" value="<?php echo $dob;?>">
			        	<input type="hidden" name="gender" value="<?php echo $gender;?>">
				        <input type="hidden" name="id" value="<?php echo $id;?>">
				        <input type="hidden" name="course" value="<?php echo $course;?>">
				        <input type="hidden" name="passing_year" value="<?php echo $passing_year;?>">
				        <input type="hidden" name="specialization" value="<?php echo $specialization;?>">
				        <input type="hidden" name="cpi" value="<?php echo $cpi;?>">
					  <div class="mb-3">
					  <h3 class="modal-title center" id="exampleModalToggleLabel">Job Preferences</h3>
					    <label for="loginInputEmail1" class="form-label">Skill Set</label>
					    <select class="form-control" name="skill_set[]" multiple required>
  							<option value="C">C</option>
  							<option value="C#">C#</option>
  							<option value="C++">C++</option>
  							<option value="Cyber Security">Cyber Security</option>
  							<option value="Ethical Hacking">Ethical Hacking</option>
  							<option value="Financial Analysis">Financial Analysis</option>
  							<option value="HTML">HTML</option>
  							<option value="Java">Java</option>
  							<option value="Machine Learning">Machine Learning</option>
  							<option value="MySQL">MySQL</option>
  							<option value="Oracle">Oracle</option>
  							<option value="Photoshoping">Photoshoping</option>
  							<option value="PHP">PHP</option>
  							<option value="Python">Python</option>
  							<option value="Ruby">Ruby</option>
  							<option value="Web Designing">Web Designing</option>
						</select>
					  </div>
					  <div class="mb-3">
					    <label for="loginInputEmail1" class="form-label">Resume/Curriculum Vitae(CV)</label>
					    <input type="file" class="form-control" name="resume_cv" accept=".pdf,.doc,image/*" id="resume" required>
					  </div>
					</div>
					<div class="modal-footer">
		        	<button class="btn btn-secondary" data-bs-target="#modal2" data-bs-toggle="modal" data-bs-dismiss="modal">BACK</button>
		        	<input type="submit" class="btn btn-primary" name="submit3" value="NEXT">
		        </form>
		       </div>
		      </div>
		    </div>
		  </div>
		   <?php 
		  if(isset($_REQUEST['submit3']))
        	{
        		$fname = $_REQUEST['fname'];
        		$dob = $_REQUEST['dob'];
        		$gender = $_REQUEST['gender'];
        		$id = $_REQUEST['id'];
        		$course = $_REQUEST['course'];
        		$passing_year = $_REQUEST['passing_year'];
        		$specialization = $_REQUEST['specialization'];
        		$cpi = $_REQUEST['cpi'];
        		$skill_set = implode(",", $_REQUEST['skill_set']);
        		$file_name=$_FILES['resume_cv']['name'];
        		$file_type=$_FILES['resume_cv']['type'];
        		$file_data=file_get_contents($_FILES['resume_cv']['tmp_name']);
        		echo "<script type='text/javascript'>
					$(document).ready(function()
					{
						$('#modal3').modal('hide');	
						$('#modal4').modal('show');
					});
					</script>";
        	}
    	?>
		  <div class="modal fade" id="modal4" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" style="display: none;" aria-hidden="true">
		    <div class="modal-dialog modal-lg modal-dialog-scrollable">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h1 class="modal-title" id="exampleModalToggleLabel">Student Registration</h3>
		          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		        </div>
		        <div class="modal-body">
			        <form method="POST" onsubmit="return validate_form()" id="form4" name="student_register" action="student_signup.php" enctype="multipart/form-data">
					  	<input type="hidden" name="fname" value="<?php echo $fname;?>">
			        	<input type="hidden" name="dob" value="<?php echo $dob;?>">
			        	<input type="hidden" name="gender" value="<?php echo $gender;?>">
				        <input type="hidden" name="id" value="<?php echo $id;?>">
				        <input type="hidden" name="course" value="<?php echo $course;?>">
				        <input type="hidden" name="passing_year" value="<?php echo $passing_year;?>">
				        <input type="hidden" name="specialization" value="<?php echo $specialization;?>">
				        <input type="hidden" name="cpi" value="<?php echo $cpi;?>">
				        <input type="hidden" name="skill_set" value="<?php echo $skill_set;?>">
				        <input type="hidden" name="file_name" value="<?php echo $file_name;?>">
				        <input type="hidden" name="file_type" value="<?php echo $file_type;?>">
				        <input type="hidden" name="file_data" value="<?php $file_data;?>">
				        <?php //$_SESSION['file_data']=$file_data;?>
					  <div class="mb-3">
					  <h3 class="modal-title center" id="exampleModalToggleLabel">Authentication Details</h3>
					    <label for="loginInputEmail1" class="form-label">Email-ID</label>
					    <input type="email" class="form-control" id="email" name="email">
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Mobile Number</label>
					    <div class="pd-telephone-input">
						<input class="form-control" type="tel" name="phonenumber">
						</div>
						<script src="pid/pidie-0.0.8.js"></script>
						<script>
							new Pidie();
						</script>
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Password</label>
					    <input type="password" class="form-control" id="password" name="pwd" required>
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
					    <input type="password" class="form-control" id="confirm_password" name="cpwd">
					  </div>
				</div>
		        <div class="modal-footer">
		        	<button class="btn btn-secondary" data-bs-target="#modal3" data-bs-toggle="modal" data-bs-dismiss="modal">BACK</button>
		        	<input type="submit" class="btn btn-primary" name="submit4" onclick="validate_form()" value="Submit">
		        </form>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
		<script type="text/javascript">
                function validate_form() 
                {
                    var password = document.forms["student_register"]["pwd"].value;
                    var confirm_password = document.forms["student_register"]["cpwd"].value;
                    var mobile_number = document.forms["student_register"]["phonenumber"].value;
                    var flag = true;
                    else if (!password.match(/[0-9a-zA-Z\W]/) || password.length < 8) 
                    {
                        if (!password.match(/[0-9]/))
                            alert("Password must contain atleast one digit[0-9]!");
                        if (!password.match(/[a-z]/))
                            alert("Password must contain atleast one lowercase letter[a-z]!");
                        if (!password.match(/[A-Z]/))
                            alert("Password must contain atleast one uppercase letter[A-Z]!");
                        if (!password.match(/[\W]/))
                            alert("Password must contain atleast one special character[@,#,$,!,...]!");
                        if (password.length < 8)
                            alert("Password must be atleast 8 characters long!");
                        flag = false;
                    }
                    else if(password!=confirm_password)
					{
						alert("The Password must match with the Confirm Password!");
						flag=false;
					}
                    else if (!mobile_number.match(/^[789]\d{9,9}$/)) {
                        alert("Enter Valid Mobile Number!");
                        flag = false;
                    }
                    if (flag == true)
                        return true;
                    else
                        return false;
                }
            </script>
		<!--TPC member-->
		  <div class="bd-example">
			  <div class="modal fade" id="modal6" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
			    <div class="modal-dialog modal-lg modal-dialog-scrollable">
			      <div class="modal-content">
			        <div class="modal-header">
			          <h1 class="modal-title" id="exampleModalToggleLabel">TPC Member Registration</h1>
			          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			        </div>
			        <div class="modal-body">
						        <form method="POST" id="form5">
								<div class="mb-3">
								  <h3 class="modal-title center" id="exampleModalToggleLabel">Personal Details</h3>
								    <label for="loginInputEmail1" class="form-label">TPC Member ID Number</label>
								    <input type="text" name="id" class="form-control" id="id" required>
								  </div>
								  <div class="mb-3">
								    <label for="exampleInputPassword1" class="form-label">Full Name</label>
								    <input type="text" name="name" class="form-control" id="name" required>
								  </div>
								  <div class="mb-3">
								    <label for="exampleInputPassword1" class="form-label">Role</label>
								    <select class="form-control" name="role" required>
			  							<option value="T & P Professor In-Charge">T & P Professor In-Charge</option>
			  							<option value="T & P Officer">T & P Officer</option>
			  							<option value="Assistant T & P Officer">Assistant T & P Officer</option>
			  							<option value="T & P Faculty">T & P Faculty</option>
			  							<option value="T & P Team Member">T & P Team Member</option>
									</select>
								  </div>
					</div>
			        <div class="modal-footer">
			          <input type="submit" name="submit5" class="btn btn-primary" value="NEXT">
			          </form>
			        </div>
			      </div>
			    </div>
			  </div>
			   <?php 
		  if(isset($_REQUEST['submit5']))
        	{
        		$id = $_REQUEST['id'];
        		$name = $_REQUEST['name'];
        		$role = $_REQUEST['role'];
        		echo "<script type='text/javascript'>
					$(document).ready(function()
					{
						$('#modal6').modal('hide');	
						$('#modal7').modal('show');
					});
					</script>";
        	}
    	?>
			  <div class="modal fade" id="modal7" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" style="display: none;" aria-hidden="true">
			    <div class="modal-dialog modal-lg modal-dialog-scrollable">
			      <div class="modal-content">
			        <div class="modal-header">
			          <h1 class="modal-title" id="exampleModalToggleLabel">TPC Member Registration</h1>
			          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			        </div>
			        <div class="modal-body">
				        <form method="POST" id="form6" action="tpcmember_signup.php">
				        	<input type="hidden" name="id" value="<?php echo $id;?>">
				        	<input type="hidden" name="name" value="<?php echo $name;?>">
				        	<input type="hidden" name="role" value="<?php echo $role;?>">
						  <div class="mb-3">
						  <h3 class="modal-title center" id="exampleModalToggleLabel">Authentication Details</h3>
						    <label for="loginInputEmail1" class="form-label">Email-ID</label>
						    <input type="email" class="form-control" name="email" id="email">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Mobile Number</label>
						    <div class="pd-telephone-input">
							<input class="form-control" type="tel" name="phonenumber" required>
							</div>
							<script src="pid/pidie-0.0.8.js"></script>
							<script>
								new Pidie();
							</script>
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Password</label>
						    <input type="password" class="form-control" name="pwd" id="password">
						  </div>
						  <div class="mb-3">
						    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
						    <input type="password" class="form-control" name="cpwd" id="confirm_password">
						  </div>
					</div>
			        <div class="modal-footer">
			        	<button class="btn btn-secondary" data-bs-target="#modal6" data-bs-toggle="modal" data-bs-dismiss="modal">BACK</button>
			        	<input type="submit" name="submit6" class="btn btn-primary" value="Submit">
			        	</form>
			        </div>
			      </div>
			    </div>
			  </div>
		</div>
		 <!--company-->
		  <div class="bd-example">
		  <div class="modal fade" id="modal8" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
		    <div class="modal-dialog modal-lg modal-dialog-scrollable">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h1 class="modal-title" id="exampleModalToggleLabel">Company Registration</h1>
		          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		        </div>
		        <div class="modal-body">
					        <form name="company_register">
							<div class="mb-3">
							  <h3 class="modal-title center" id="exampleModalToggleLabel">Company Details</h3>
							  </div>
							  <div class="mb-3">
							    <label for="exampleInputPassword1" class="form-label">Company's Name</label>
							    <input type="text" class="form-control" id="signUpInputCompanyName1" name="name" required>
							  </div>
							  <div class="mb-3">
							    <label for="signUpInputRecruiterName1" class="form-label">Recruiter's Name</label>
							    <input type="text" class="form-control" id="signUpInputRecruiterName1" name="recruiter_name" required>
							  </div>
							  <div class="mb-3">
							    <label for="exampleInputPassword1" class="form-label">Official Website</label>
							    <input type="url" class="form-control" id="signUpInputWebsiteLocation1" name="website" required>
							  </div>
					      	</div>
		        <div class="modal-footer">
		          <input class="btn btn-primary" type="submit" name="submit7" value="NEXT">
		          </form>
		        </div>
		      </div>
		    </div>
		  </div>
		  <?php 
		  if(isset($_REQUEST['submit7']))
        	{
        		$name = $_REQUEST['name'];
        		$recruiter_name = $_REQUEST['recruiter_name'];
        		$website = $_REQUEST['website'];
        		echo "<script type='text/javascript'>
					$(document).ready(function()
					{
						$('#modal8').modal('hide');	
						$('#modal9').modal('show');
					});
					</script>";
        	}
    	?>
		  <div class="modal fade" id="modal9" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" style="display: none;" aria-hidden="true">
		    <div class="modal-dialog modal-lg modal-dialog-scrollable">
		      <div class="modal-content">
		        <div class="modal-header">
		          <h1 class="modal-title" id="exampleModalToggleLabel">Company Registration</h1>
		          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		        </div>
		        <div class="modal-body">
			        <form method="POST" action="company_signup.php">
			        	<input type="hidden" name="name" value="<?php echo $name;?>">
				        	<input type="hidden" name="recruiter_name" value="<?php echo $recruiter_name;?>">
				        	<input type="hidden" name="website" value="<?php echo $website;?>">
					  <div class="mb-3">
					  <h3 class="modal-title center" id="exampleModalToggleLabel">Authentication Details</h3>
					    <label for="loginInputEmail1" class="form-label">Recruiter's Professional Email-ID</label>
					    <input type="email" class="form-control" id="signUpCompanyEmail" name="email" required>
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Official Contact Number</label>
					    <div class="pd-telephone-input">
						<input class="form-control" type="tel" name="phonenumber" required>
						</div>
						<script src="pid/pidie-0.0.8.js"></script>
						<script>
							new Pidie();
						</script>
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Password</label>
					    <input type="password" class="form-control" id="signUpCompanyPassword" name="pwd" required>
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Confirmation Password</label>
					    <input type="password" class="form-control" id="signUpCompanyConfirmPassword" name="cpwd" required>
					  </div>
				</div>
		        <div class="modal-footer">
		        	<button class="btn btn-secondary" data-bs-target="#modal8" data-bs-toggle="modal" data-bs-dismiss="modal">BACK</button>
		        	<input class="btn btn-primary" type="submit" name="submit8" value="Submit">
		        	</form>
		        </div>
		      </div>
		    </div>
		  </div>
		<!-- Open first dialog -->
			<div class="btn-group dropend">
				<a  class="btn btn-outline-dark me-2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sign-Up</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" data-bs-toggle="modal" href="#modal1" role="button">Student</a></li>
			    <li><a class="dropdown-item" data-bs-toggle="modal" href="#modal6" role="button">TPC Member</a></li>
			    <li><a class="dropdown-item" data-bs-toggle="modal" href="#modal8" role="button">Company</a></li>
			</ul>
			</div>
		</div>
	      <a href="https://www.bvmengineering.ac.in/comman_page1.aspx?page_id=4" class="btn btn-danger btn-sm">How to Apply?</a></button>
	      <input type="search" class="form-control me-2" id="search" value="" placeholder="Search Here....." onchange="searchPage()" list="Top_Searches">
    		<datalist id="Top_Searches">
				<option value="Contact Us"></option>
				<option value="Recruiting Companies"></option>
				<option  value="About BVM"></option>
				<option value="About TPC"></option>
				<option  value="About our Website"></option>
			</datalist>
		    <script>
		        function searchPage() {
		            var search = document.getElementById("search").value.toLowerCase();
		            if (search === "contact us") {
		                window.open("contact_us.php");
		            }
					else if (search === "recruiting companies") {
		                window.open("recruiting_companies.php");
		            }
		            else if (search === "about bvm") {
		                window.open("about_bvm.php");
		            }
		            else if (search === "about tpc") {
		                window.open("about_tpc.php");
		            }
		            else if (search === "about our website") {
		                window.open("about_website.php");
					}
					else{
						alert("No matches found! Please try different words!");
					}
		        }
		    </script>
	          <button class="btn btn-warning bi bi-search" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
	    <path
	      d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
	  </svg></button>
	        </form>
	      </div>
	    </div>
	</nav>
</body>