<!DOCTYPE html>
<html>
   <head>
    <title>BVM Placement</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="Logo.png">
</head>
<body>
 <?php include('student_menu.php');?> 
  <table id="tb">
    <tr>
      <th>Post</th>
      <th>Vacancy</th>
      <th>Salary</th>
      <th>Recruiting Criteria</th>
      <th>Apply Now</th>
    </tr>
     <?php
        if(isset($_SESSION['email']))
        {
          $email=$_SESSION['email'];
          $con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
          $db=mysqli_select_db($con,"BVMPlacement");
          $c_id=$_GET['c_id'];
          $sql="SELECT * FROM `job` WHERE `c_id` IN(SELECT `c_id` FROM `company` WHERE `c_id` ='$c_id');";
          $result=(mysqli_query($con,$sql));
          while($row = mysqli_fetch_array($result))
          {
              echo "<tr>";
                  echo "<td>" . $row['post'] . "</td>";
                  echo "<td>" . $row['vacancy'] . "</td>";
                  echo "<td>" . $row['salary'] . "</td>";
                  echo "<td><a target='_blank' href='recruitment_criteria.php?job_id=".$row['job_id']."'>".$row['file_name']."</a></td>";
                  echo "<td><a class='btn btn-success' aria-current='page' role='button' href='apply_now_recruiting_companies.php?job_id=".$row['job_id']."&c_id=".$c_id."' target='_self'>Apply Now</a></td>";
              echo "</tr></table><div style='margin-bottom:40%;'></div>";
          }
        }
        else
          header("location:index.php");
      ?>
      <?php include ('footer.php');?>
</body>
</html>