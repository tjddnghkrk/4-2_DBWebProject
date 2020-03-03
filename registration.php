<!DOCTYPE html>
<?php
session_start();


if (isset($_POST['submit'])) {
    $id = ($_POST['id']);
    $pass = ($_POST['pass']);
	$name = ($_POST['name']);
	$email = ($_POST['email']);

	RegistrationCheck($id,$pass,$name,$email);
}
?>

<?php
function RegistrationCheck($id,$pass,$name,$email){
	$con = mysqli_connect('localhost','shop','7941','shop');
	$query = "SELECT id FROM users WHERE id='$id'";
    $result = mysqli_query($con,$query);

		 if ( !mysqli_num_rows($result) > 0 ) {
			$query = "INSERT INTO users (id, pass,name, email) VALUES ('$id','$pass','$name','$email')";
			mysqli_query($con,$query);
			$_SESSION['login']=$id;
            header("Location: main.php?registration=1");
		}else if (mysqli_num_rows($result) > 0) {
			echo "<script> alert('이미 등록된 사용자가 있습니다.')</script>";
		}

	mysqli_close($con);

}

?>
<html>
<head>

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>
<div>


	<div style="background-color:white; margin: 10em auto; width:600px; border-radius:10px;border:2px solid darkgray; padding : 20px;">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table border="0" width="600" >

<tr>
	<div class="item" style=" text-align: 'center'; font-family: 'Josefin Sans', sans-serif;"><b>ID : </b></div><input type="text" name="id" >
	<br/><br/>
	<div class="item" style=" text-align: 'center'; font-family: 'Josefin Sans', sans-serif;"><b>Password : </b></div> <input type="password" name="pass" >
	<br/><br/>
	<div class="item" style=" text-align: 'center'; font-family: 'Josefin Sans', sans-serif;"><b>Name : </b></div> <input type="text" name="name" >
	<br/><br/>
	<div class="item" style=" text-align: 'center'; font-family: 'Josefin Sans', sans-serif;"><b>Email : </b></div><input type="text" name="email" >

	<br><br><input type="submit" name="submit" value=" Registration " style=font-size:15pt; background-color:gray;>
</tr>
</table>
</form>
	</div>
</div>

</body>
</html>
