<?php

include_once "connection.php";


$name = $_POST['name'];
$amount = $_POST['amount'];

$query="INSERT into order (name,amount)
VALUES('$name','$amount')";
if ($connection->query($query)) {
    echo "data sent";
    header("location : all_orders.php");
}else {
    echo $connection->error;
}

?>
