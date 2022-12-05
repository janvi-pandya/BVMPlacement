<!DOCTYPE html>
<html>
   <head>
    <title>BVM Placement</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="Logo.png">
    <link rel="stylesheet" type="text/css" href="custom_format.css">
    <base target="_self">
</head>
	<?php include("company_menu.php"); ?>
   <body>
      <table id="tb">
        <?php
          $con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
          $db=mysqli_select_db($con,"BVMPlacement");
          if(isset($_REQUEST['email']))
          {
            $email=$_REQUEST['email'];
            $sql="SELECT * FROM student where `email`='$email';";
            $row=mysqli_fetch_array(mysqli_query($con,$sql));
            $enroll_no=$row['id'];
          }
          elseif(isset($_REQUEST['enroll_no']))
          {
            $enroll_no=$_REQUEST['enroll_no'];
            $sql="SELECT * FROM student where `id`='$enroll_no';";
          }
          $query=mysqli_query($con,$sql);
         /* if($query)
          {
            $row=mysqli_fetch_array($query);
            $query_coll=mysqli_query($con,"select `college_name` from college where `u_id`='$row[u_id]';");
            $row_coll=mysqli_fetch_array($query_coll);
          }
          else
            //echo die(mysqli_error($con));*/
        ?>
        <tr>
          <th>STUDENT ID</th>
          <td><?php echo $row['id']; ?></td>
        </tr>
        <tr>
          <th>STUDENT NAME</th>
          <td><?php echo $row['student_name']; ?></td>
        </tr>
        <tr>
          <th>DATE OF BIRTH</th>
          <td><?php echo $row['DOB']; ?></td>
        </tr>
        <tr>
          <th>GENDER</th>
          <td><?php echo $row['gender']; ?></td>
        </tr>
        <tr>
          <th>COURSE</th>
          <td><?php echo $row['course']; ?></td>
        </tr>
        <tr>
          <th>SPECIALIZATION</th>
          <td><?php echo $row['specialization']; ?></td>
        </tr>
        <tr>
          <th>CPI</th>
          <td><?php echo $row['CPI']; ?></td>
        </tr>
        <tr>
          <th>SKILL_SET</th>
          <td><?php echo $row['skill_set']; ?></td>
        </tr>
        <tr>
          <th>RESUME/CV</th>
          <td><a target="_blank" href="view.php?email=<?php echo $row['email']?>"><?php echo $row['file_name']?></a></td>
        </tr>
        <tr>
          <th>EMAIL ID</th>
          <td><?php echo $row['email']; ?></td>
        </tr>
        <tr>
          <th>PHONE NUMBER</th>
          <td><?php echo $row['phone_no']; ?></td>
        </tr>
      </table>
    </body>
    </html>