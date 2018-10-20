<?php
session_start();
$id=$_SESSION['id'];
if(isset($_POST['submit'])){
	
	$a=$_FILES['profilepic'];
	//print_r($a);
	$p=$a['name'];
	$q=$a['tmp_name'];
	$d="img/$p";
	$res=move_uploaded_file($q,$d);
	if($res){
		$q="update student set image='$p' where id='$id'";
		include('connection.php');
		$r= mysqli_query($con,$q);
		if($r){
			echo "uploaded successfully";
			header('location:profile.php');
		}
	}
	
	
}


?>
<form action="changepic.php" method="POST" enctype="multipart/form-data">

Select picture
<input type="file" name="profilepic" >
<br>
<input type="submit" name="submit">

</form>