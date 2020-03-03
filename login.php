<!DOCTYPE html>
<?php
session_start();

if (isset($_POST['submit'])) {

    $id = ($_POST['id']);
    $pass = ($_POST['pass']);

	LoginCheck($id,$pass);
}
?>

<?php
function LoginCheck($id,$pass){
	$con= mysqli_connect('localhost','shop','7941','shop');
	$query = "SELECT id, pass FROM users WHERE id='$id' AND pass='$pass'";
    $result = mysqli_query($con,$query);

	if ( mysqli_num_rows($result) > 0 ) {
            $_SESSION['login']=$id;
            header("Location: main.php");
    }else{
		echo "<script> alert('ID또는 P·W를 다시 한 번 확인해주세요.')</script>";
	}

	mysqli_close($con);
}

?>

<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">


</head>
<body>


	<div style=" color:black; WIDTH: 100%; HEIGHT: 100%">
	<div style="background-color:white; margin: 3em auto; width:400px; border-radius:10px;border:2px solid darkgray;">

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table border="0">


        <tr>
          <br>
            <td colspan="1" width="40" height="40" align="center" style="font-family: 'Josefin Sans', sans-serif;"> <b>I D</b> </td>
            <td colspan="2" width="300" height="40"> <input type="text" name="id" style="font-family: 'Josefin Sans', sans-serif; font-size:13pt; height:25px; width:300px"> </td>
        </tr>
        <tr>
            <td colspan="1" width="40" height="40"align="center" style="font-family: 'Josefin Sans', sans-serif;"> <b>P·W</b> </td>
            <td colspan="2" width="300" height="40"> <input type="password" name="pass" style="font-family: 'Josefin Sans', sans-serif; font-size:13pt; height:25px; width:300px"> </td>
        </tr>
		<tr>
		<td colspan="3"  width="300" height="40"align="center">
            <input type="submit" name="submit" value=" Login " style="font-family: 'Josefin Sans', sans-serif; font-size:15pt;"> </td>
		</tr>
        <tr>
            <td colspan="3" width="200" height="40" align="center"><b><a style="font-family: 'Josefin Sans', sans-serif;"class=loginservice href="registration.php"> 회원가입</a>

        </tr>
        </table>

    </form>

	</div>

</div>

</body>
</html>
