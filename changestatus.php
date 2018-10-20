<?php
session_start();
$id=$_SESSION['id'];
if(isset($_POST['submit'])){
	include('connection.php');
	$a=$_POST['status'];
	$qry="UPDATE student set status='$a' where ID='$id'";
	$res=mysqli_query($con,$qry);
	if($res){
			echo"Record updated successfully";
			header('location:profile.php');
		}
}
?>
<form action="changestatus.php" method="POST">

Type your status
<input type="text" name="status" >
<br>
<input type="submit" name="submit">

</form>