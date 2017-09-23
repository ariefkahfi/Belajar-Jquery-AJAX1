<?php
include 'koneksi.php';


$username = $_POST['username'];
$password = $_POST['password'];

$query_insert = mysqli_query($con,"insert into user (username,password)
values ('$username','$password')");

if($query_insert){
   echo "Data berhasil dimasukkan ke dalam database";
}else{
   echo mysqli_error($con);
}