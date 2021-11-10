<?php
include_once "connection.php";

$id = $_POST['id'];
$name = $_POST['name'];
$amount = $_POST['amount'];

$query ="UPDATE order set name='$name',amount='$amount' where id='$id'";

if ($connection->query($query)) {
   echo 'data updated';
//    header ('location : all_orders.php')
} else {
  echo $connection->error;
}




?>