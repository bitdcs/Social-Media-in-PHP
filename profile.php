<?php
//echo"welcome to our website";
session_start();
if(!isset($_SESSION['id'])){
	header('location:login.php');
}else{
	$id=$_SESSION['id'];
	$email=$_SESSION['email'];
	echo"<h1>Welcome $email</h1>";
	echo"<a href='logout.php'>Logout</a>";
	$q="select * from student where id=$id";
	include('connection.php');
	$r=mysqli_query($con,$q);
	$arr=mysqli_fetch_assoc($r);
	//print_r($arr);
}
?>
<br>
<br>
<!--<img src="img/<?= $arr['image'];?>" height="100" width="100"><br>
<a href="changepic.php">Change profile picture</a>-->


<link rel="stylesheet" href="profile.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="container">
    <div class="fb-profile">
        <img align="left" class="fb-image-lg" src="cover/<?= $arr['cover'];?>" height="500" alt="Profile image example"/>
		
        <img align="left" class="fb-image-profile thumbnail" src="img/<?= $arr['image'];?>" alt="Profile image example"/>
        <a href="changecover.php">Change cover picture</a><br>
		<a href="changepic.php">Change profile picture</a>
		<div class="fb-profile-text">
            <h1><?= $arr['username']; ?></h1>
			<h3>Status: <?= $arr['status']; ?> </h3><a href="changestatus.php">Update your Status</a>
            <!--<p><?= $arr['status']; ?></p>-->
        </div>
    </div>
</div>

<!--<table border="1">
<tr>
<th>ID</th>
<th>Username</th>
<th>email</th>
</tr>
<tr>
<td><?= $arr['id']; ?></td>
<td><?= $arr['username']; ?></td>
<td><?= $arr['email']; ?></td>
</tr>
</table> -->