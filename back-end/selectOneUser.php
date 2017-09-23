<?php
include 'koneksi.php';

$id = $_GET['id'];

$query_get_one =mysqli_query($con,"select id,username from user where id = '$id' ");



$rs = mysqli_fetch_assoc($query_get_one);
//array_push($arr,$rs);

$arr['person']=$rs;

echo json_encode($arr);