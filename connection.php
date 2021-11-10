<?php
$connection = new mysqli("localhost", "root", "", "practicephp"); 
if (!$connection) {
    die("failed to connection:". mysqli_connect_error());
}
echo "successfull";
?>