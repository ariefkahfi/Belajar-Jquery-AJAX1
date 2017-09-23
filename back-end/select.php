<?php
include 'koneksi.php';



$query_select = mysqli_query($con,"select id,username from user");


$arr = array();

while($rs = mysqli_fetch_assoc($query_select)){
    array_push($arr,$rs);
}

echo json_encode(array('person'=>$arr));
