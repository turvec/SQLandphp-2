<?php

include_once "connection.php";


$name = $_POST['name'];
$amount = $_POST['amount'];
echo $name;
echo $amount;

$sql="INSERT INTO orders (name, amount) VALUES('$name','$amount' ) ";

if ($connection->query($sql)) {
    echo "data sent";
    header("location: all_orders.php");
}else {
    echo $connection->error;
}

?>
