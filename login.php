<?php
if(isset($_POST['login'])){
	 $a=$_POST['email'];
	 $b=$_POST['pass'];
	
	//checking connection
    include('connection.php');

	
	$q="select * from student where email='$a' and password='$b'";
	$res=mysqli_query($con,$q);
	
	if($res==true){
		$n=mysqli_num_rows($res);
		if($n==0){
			echo"<h3 style='color:red;'>Login Failed{Incorrect data}</h3>";
		}
	else{
		$arr=mysqli_fetch_assoc($res);
		//var_dump($arr);
		session_start();
		$_SESSION['id']=$arr['id'];
		$_SESSION['email']=$arr['email'];
		//echo"Login success";
		header('location:profile.php');
	}
	}
}


?>

<?php
if(isset($_POST['create'])){
$server="localhost";
$user="root";
$pass="";
$dbname="login";

//creating connection for mysqli

$con = new mysqli($server,$user,$pass,$dbname);

//checking connection

include('connection.php');

$a = mysqli_real_escape_string($con, $_POST['uname']);
$b = mysqli_real_escape_string($con, $_POST['umail']);
$c = mysqli_real_escape_string($con, $_POST['upass']);


$sql="INSERT INTO student (username, email, password) VALUES ('$a','$b','$c')";


if ($con->query($sql) === TRUE) {
	
    echo "<h3 style='color:blue;'>Database created</h3>";
}
 else {
    echo "Error creating database: " .$sql . "<br/>" . $con->error;
}



$con->close();
}

?>

<html>
<head>
<style>

</style>
<title>Registration form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="login">
<div class="form">
<form class="register" method="POST" action="login.php">
<input type="text" name="uname" placeholder="User Name"/>
<input type="mail" name="umail" placeholder="Email Id"/>
<input type="Password" name="upass" placeholder="Password"/>
<button name="create">Create</button>
<p class="message">Already Registered?<a href="#">Log In</a></p>
</form>
<form class="login-form" method="POST" action="login.php">
<input type="mail" name="email" placeholder="E-mail"/>
<input type="password" name="pass" placeholder="Password"/>
<button name="login">Log In </button>
<p class="message">Not Registered?<a href="#">Register</a>
</p>
</form>
</div>
</div>
<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script>
$('.message a').click(function(){
$('form').animate({height:"toggle", opacity:"toggle"},"slow");
});
</script>
</body>
</html>
