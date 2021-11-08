<?php

include_once "connection.php";


$name = $_POST['name'];
$amount = $_POST['amount'];
echo "   ".$name;
echo "   ".$amount;

$query="INSERT into order (name,amount)
VALUES('$name','$amount')";
if ($connection->query($query)) {
    echo "data sent";
}else {
    echo $connection->error;
}

?>
