<!DOCTYPE HTML>
	<html>
	<?php
		$con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
		$db=mysqli_select_db($con,"BVMPlacement");
		$id = $_REQUEST['s_id'];
		$sql="UPDATE `student` SET `approval_status`='N' WHERE `id`='$id';";
        $result=(mysqli_query($con,$sql));
        if($result)
		{
			echo '<script type="text/javascript">
			alert("You have Blocked the Student Successfully!");
			</script>';
			header("refresh:1;url=tpcmember_user_page.php");
		}
	?>
</html>