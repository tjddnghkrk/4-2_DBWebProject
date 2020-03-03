<?php
$con= mysqli_connect('localhost','shop','7941','shop'); //DB연결

/*유저 TABLE생성*/
$query = "CREATE TABLE users
(
no int not null auto_increment,
id varchar(20),
pass varchar(20),
name varchar(20),
email varchar(30),
PRIMARY KEY(no)
)";
mysqli_query($con,$query);
mysqli_close($con);
?>

<?php
$con= mysqli_connect('localhost','shop','7941','shop'); //DB연결

/*관리자 TABLE생성*/
$query = "CREATE TABLE product
(
no int not null auto_increment,
name varchar(20),
comment varchar(30),
price int(20),
classify varchar(20),
img varchar(40),
PRIMARY KEY(no)
)";
mysqli_query($con,$query);
mysqli_close($con);
?>

<?php
$con= mysqli_connect('localhost','shop','7941','shop'); //DB연결

/*메시지 TABLE생성*/
$query = "CREATE TABLE bucket
(
no int not null auto_increment,
PRIMARY KEY(no),
session_id varchar(50),
name varchar(20),
parent int,
count int,
price int,
money int,
regdate int
)";
mysqli_query($con,$query);
mysqli_close($con);

?>

<?php
$con= mysqli_connect('localhost','shop','7941','shop'); //DB연결

/*게시글 테이블 생성*/
$query = "CREATE TABLE shop_list
(
no int not null auto_increment,
PRIMARY KEY(no),
order_id varchar(20)  not null,
name varchar(20) not null,
address1 varchar(20) not null,
address2 varchar(20),
phone varchar(20),
memo text,
regdate int,
total int,
location int DEFAULT 1.00,
email varchar(50)
)";
mysqli_query($con,$query);

mysqli_close($con);

?>
