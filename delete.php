<?php
include_once "connection.php";

$id = $_GET['id'];

$query ="DELETE from orders where id='$id'";

if ($connection->query($query)) {
   echo 'data deleted';
//    header ('location : all_orders.php')
} else {
  echo $connection->error;
}




?>