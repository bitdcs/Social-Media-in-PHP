<?php
session_start();
$id=$_SESSION['id'];
if(isset($_POST['submit'])){
	
	$a=$_FILES['coverpic'];
	//print_r($a);
	$p=$a['name'];
	$q=$a['tmp_name'];
	$d="cover/$p";
	$res=move_uploaded_file($q,$d);
	if($res){
		$q="update student set cover='$p' where id='$id'";
		include('connection.php');
		$r= mysqli_query($con,$q);
		if($r){
			echo "cover pic uploaded successfully";
			header('location:profile.php');
		}
	}
	
	
}


?>
<form action="changecover.php" method="POST" enctype="multipart/form-data">

Select picture
<input type="file" name="coverpic" >
<br>
<input type="submit" name="submit">

</form>