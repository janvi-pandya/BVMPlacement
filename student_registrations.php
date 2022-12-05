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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
	<?php include("tpcmember_menu.php"); ?>
   <body>
      <table id="tb">
         <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Course</th>
            <th>Specialization</th>
            <th>CPI</th>
            <th>Resume/CV</th>
            <th>Other Details</th>
            <th>Revoke Access</th>
         </tr>
      <?php
        $con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
        $db=mysqli_select_db($con,"BVMPlacement");
        $sql="SELECT * FROM student WHERE `approval_status`='Y';";
        $result=(mysqli_query($con,$sql));
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['student_name'] . "</td>";
                echo "<td>" . $row['course'] . "</td>";
                echo "<td>" . $row['specialization'] . "</td>";
                echo "<td>" . $row['CPI'] . "</td>";
                echo "<td><a target='_blank' href='view.php'>".$row['file_name']."</a></td>";
                echo "<td><a class='btn btn-secondary' aria-current='page' role='button' href='student_details.php?email=".$row['email']."' target='_self'>See More</a></td>";
                echo "<td><a class='btn btn-danger' aria-current='page' role='button' href='student_access_revoke.php?s_id=".$row['id']."' target='_self'>Revoke Access</a></td>";
            echo "</tr>";
        }
        echo "</tr>";
      ?>
      </table>
      <?php include('footer.php');?>
   </body>
</html>