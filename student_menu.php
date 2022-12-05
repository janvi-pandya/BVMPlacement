<?php session_start();if(isset($_SESSION['email']))
  {
    $email=$_SESSION['email']; ?>
<head>
    <title>BVM Placement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="Logo.png">
    <link rel="stylesheet" type="text/css" href="custom_format.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <base target="_self">
    <link href="pid/pidie-0.0.8.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="Logo.png" alt="..." class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-weight: bold;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="student_user_page.php">Home</a>
        </li>
        <li class="nav-item">
          <div class="btn-group dropend">
            <a  class="btn btn-outline-dark me-2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" data-bs-target="#modal1" data-bs-toggle="modal" data-bs-dismiss="modal" role="button">Update Profile</a></li>
              <li><a class="dropdown-item" href="delete_student.php" role="button">Delete Profile</a></li>
          </ul>
        </div>
      </li>
          <li class="nav-item">
              <a class="nav-link" href="student_recruiting_companies.php">Our Recruiters</a>
          </li>
      </ul>
  </div>
          <a href="logout.php" class="btn btn-outline-dark" role="button">Logout</a>
          <a href="student_recruiting_companies.php" class="btn btn-danger btn-lg">Apply Now</a></button>
          <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-warning bi bi-search" type="submit"><svg xmlns="http://www.w3.org/2000/svg"
                      width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                      <path
                          d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                  </svg></button>
          </form>
      </div>
      </div>
  </nav>
  <?php
  $con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
    $db=mysqli_select_db($con,"BVMPlacement");
  $sql="select * from student where email='$email';";
  $result=(mysqli_query($con,$sql));
  while($row=mysqli_fetch_array($result))
  {
    $id=$row['id'];
    $fname=$row['student_name'];
    $phone=$row['phone_no'];
    $email=$row['email'];
    $dob=$row['DOB'];
    $gender=$row['gender'];
    $course=$row['course'];
    $cpi=$row['CPI'];
    $specialization=$row['specialization'];
    $file_name=$row['file_name'];
    $skill_set=explode(',', $row['skill_set']);
    $passing_year=$row['passing_year'];
  }
?>
<!--Student Update modal-->
        <div class="bd-example">
            <div class="modal fade" id="modal1" aria-labelledby="exampleModalToggleLabel" tabindex="-1"
                style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" id="exampleModalToggleLabel">Update Profile</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" id="form1" name="student_register" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <h3 class="modal-title center" id="exampleModalToggleLabel">Personal Details
                                    </h3>
                                    <label for="loginInputEmail1" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="fname"
                                        value="<?php echo $fname;?>" required>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Birth-Date</label>
                                    <input type="date" class="form-control" id="bdate" name="dob"
                                        value="<?php echo $dob;?>" required>
                                </div>

                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label>&emsp;&emsp;
                                    <input class="form-radio-input" type="radio" name="gender" value="F"
                                        <?php echo($gender=='F' )?'checked':'' ?>>Female
                                    &emsp;
                                    <input class="form-radio-input" type="radio" name="gender" value="M" value="M"<?php echo($gender=='M' )?'checked':'' ?>>Male<br />
                                </div>
                                <div class="mb-3">
                                    <h3 class="modal-title center" id="exampleModalToggleLabel">Educational Details
                                    </h3>
                                    <label for="loginId1" class="form-label">Student ID</label>
                                    <input type="text" class="form-control" name="id" value="<?php echo $id; ?>"
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Course</label>&emsp;&emsp;
                                    <input class="form-radio-input" type="radio" name="course" value="B.Tech"
                                        <?php echo($course=='B.Tech' )?'checked':'' ?>>B.Tech&emsp;
                                    <input class="form-radio-input" type="radio" name="course"
                                        value="M.Tech"<?php echo($course=='M.Tech' )?'checked':'' ?>>M.Tech<br>
                                </div>
                                <div class="mb-3">
                                    <label for="loginInputEmail1" class="form-label">Passing Year</label>
                                    <select class="form-control" name="passing_year" required>
                                        <option value="2021"<?php echo($passing_year=='2021')?'selected':'' ?>>2021</option>
                                        <option value="2022"<?php echo($passing_year=='2022')?'selected':'' ?>>2022</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Specialization</label>
                                    <select class="form-control" name="specialization" required>
                                        <option value="Civil"<?php echo($specialization=='Civil')?'selected':'' ?>>Civil</option>
                                        <option value="Computer"<?php echo($specialization=='Computer')?'selected':'' ?>>Computer</option>
                                        <option value="Electrical"<?php echo($specialization=='Electrical')?'selected':'' ?>>Electrical</option>
                                        <option value="Electronics"<?php echo($specialization=='Electronics')?'selected':'' ?>>Electronics</option>
                                        <option value="Electronics & Communication"<?php echo($specialization=='Electronics & Communication')?'selected':'' ?>>Electronics & Communication
                                        </option>
                                        <option value="Information Technology"<?php echo($specialization=='Information Technology')?'selected':'' ?>>Information Technology</option>
                                        <option value="Mechanical"<?php echo($specialization=='Mechanical')?'selected':'' ?>>Mechanical</option>
                                        <option value="Production"<?php echo($specialization=='Production')?'selected':'' ?>>Production</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="loginInputEmail1" class="form-label">CPI</label>
                                    <input type="number" min=0 max=10 step="0.01" class="form-control" id="cpi"
                                        name="cpi" value="<?php echo $cpi;?>" required>
                                </div>
                                  <div class="mb-3">
                                      <h3 class="modal-title center" id="exampleModalToggleLabel">Job Preferences</h3>
                                      <label for="loginInputEmail1" class="form-label">Skill Set</label>
                                      <select class="form-control" name="skill_set[]" multiple required>
                                          <option value="C" <?php if(in_array("C",$skill_set)) echo 'selected'; ?>>C</option>
                                          <option value="C#" <?php if(in_array("C#",$skill_set)) echo 'selected'; ?>>C#</option>
                                          <option value="C++" <?php if(in_array("C++",$skill_set)) echo 'selected'; ?>>C++</option>
                                          <option value="Cyber Security" <?php if(in_array("Cyber Security",$skill_set)) echo 'selected'; ?>>Cyber Security</option>
                                          <option value="Ethical Hacking" <?php if(in_array("Ethical Hacking",$skill_set)) echo 'selected'; ?>>Ethical Hacking</option>
                                          <option value="Financial Analysis" <?php if(in_array("Financial Analysis",$skill_set)) echo 'selected'; ?>>Financial Analysis</option>
                                          <option value="HTML" <?php if(in_array("HTML",$skill_set)) echo 'selected'; ?>>HTML</option>
                                          <option value="Java" <?php if(in_array("Java",$skill_set)) echo 'selected'; ?>>Java</option>
                                          <option value="Machine Learning" <?php if(in_array("Machine Learning",$skill_set)) echo 'selected'; ?>>Machine Learning</option>
                                          <option value="MySQL" <?php if(in_array("MySQL",$skill_set)) echo 'selected'; ?>>MySQL</option>
                                          <option value="Oracle" <?php if(in_array("Oracle",$skill_set)) echo 'selected'; ?>>Oracle</option>
                                          <option value="Photoshoping" <?php if(in_array("Photoshoping",$skill_set)) echo 'selected'; ?>>Photoshoping</option>
                                          <option value="PHP" <?php if(in_array("PHP",$skill_set)) echo 'selected'; ?>>PHP</option>
                                          <option value="Python" <?php if(in_array("Python",$skill_set)) echo 'selected'; ?>>Python</option>
                                          <option value="Ruby" <?php if(in_array("Ruby",$skill_set)) echo 'selected="selected"'; ?>>Ruby</option>
                                          <option value="Web Designing" <?php if(in_array("Web Designing",$skill_set)) echo 'selected'; ?>>Web Designing</option>
                                      </select>
                                  </div>
                                  <div class="mb-3">
                                      <label for="loginInputEmail1" class="form-label">Resume/Curriculum
                                          Vitae(CV)</label>
                                     <!-- <input type="file" class="form-control" name="file_data"
                                          accept=".pdf,.doc,image/*" id="resume"><br/> -->
                                        <a target="_blank" href="view.php"><?php echo $file_name?></a>
                                  </div>
                                  <div class="mb-3">
                                      <h3 class="modal-title center" id="exampleModalToggleLabel">Authentication
                                          Details</h3>
                                      <label for="loginInputEmail1" class="form-label">Email-ID</label>
                                      <input type="email" class="form-control" id="email" name="email" value="<?php echo $email;?>" readonly required>
                                  </div>

                                  <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Mobile Number</label>
                                      <!--<div class="pd-telephone-input">-->
                                          <input class="form-control" type="tel" name="phonenumber" value="<?php echo $phone;?>" required>
                                      <!--</div>
                                      <script src="pid/pidie-0.0.8.js"></script>
                                      <script>
                                          new Pidie();
                                      </script>-->
                                  </div>

                                  <!-- <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Password</label>
                                      <input type="password" class="form-control" id="password" name="pwd">
                                  </div>
                                  <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                      <input type="password" class="form-control" id="confirm_password" name="cpwd">
                                  </div> -->
                          </div>
                          <div class="modal-footer">
                              <input type="submit" class="btn btn-primary" name="submit4" value="Update">
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <?php
            if(isset($_REQUEST['submit4']))
            {
              $fname = $_REQUEST['fname'];
              $id = $_REQUEST['id'];
              $dob = $_REQUEST['dob'];
              $gender = $_REQUEST['gender'];
              $course = $_REQUEST['course'];
              $passing_year = $_REQUEST['passing_year'];
              $specialization = $_REQUEST['specialization'];
              $cpi = $_REQUEST['cpi'];
              $skill_set = implode(",", $_REQUEST['skill_set']);
              $phone = $_REQUEST['phonenumber'];
              $q = "UPDATE student SET student_name='$fname',phone_no='$phone',DOB='$dob',gender='$gender',CPI ='$cpi', skill_set='$skill_set',passing_year='$passing_year',specialization='$specialization', phone_no='$phone' WHERE id='$id';";
              $exe = mysqli_query($con, $q);
              if($exe)
              {
                echo '<script>
                alert("Your Profile Has Been Updated Successfully!");
                </script>';
              }
              else
              {
                  echo '<script>
                alert("SORRY! The profile could not be updated! TRY AGAIN!");
                </script>';
                header("refresh:1;url=student_user_page.php");
              }
            }
        ?>
          <script type="text/javascript">
              function validate_form() {
                  var password = document.forms["student_register"]["pwd"].value;
                  var confirm_password = document.forms["student_register"]["cpwd"].value;
                  var mobile_number = document.forms["student_register"]["phonenumber"].value;
                  var flag = true;
                  else if (!password.match(/[0-9a-zA-Z\W]/) || password.length < 8) {
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
                  else if (!mobile_number.match(/^[789]\d{9,9}$/)) {
                      alert("Enter Valid Mobile Number!");
                      flag = false;
                  }
                  if (flag == true) {
                      alert("Sign Up Successfull!");
                      return true;
                  }
                  else
                      return false;
              }
          </script>
      <?php }else header("location:index.php"); ?>
</body>
</html>
</body>