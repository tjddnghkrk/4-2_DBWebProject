<?php
session_start();
var session_id;
$con = mysqli_connect('localhost', 'shop', '7941', 'shop' );

  $query = "SELECT * FROM bucket WHERE session_id ='$session_id'";
  $result = mysquli_query($con, $query);

  while( $data = mysqli_fetch_array( $result )){
    echo 'hi : '.$data["name"].$data["price"].'<br/>';
  }
mysqli_close($con);

?>
