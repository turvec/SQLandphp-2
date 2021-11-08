<?php
include_once "connection.php";


$names = $_POST['name'];
$amount = $_POST['amount'];

$query ="INSERT into order (name,amount) 
VALUES ('$names','$amount')";
if ($connection->query($query)) {
    echo "data sent"
}else {
    echo $connection->error;
}


?>