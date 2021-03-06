<?php

include_once "connection.php";

$query = "SELECT * from orders";

$details = $connection->query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make your order</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fa/css/all.min.css">
</head>

<body>
    <h2>PLACE AN ORDER</h2>
    <center>
        <table class="table table-hover table-bordered" style="width:70%">
            <thead>
                <tr>
                    <th>Name Of Order</th>
                    <th>Quantity/Amount</th>
                    <th>Change Order</th>
                    <th>Delete Order</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($detail = $details->fetch_assoc()) {?>
                <tr>
                    <td><?php echo $detail['name'] ?></td>
                    <td><?php echo $detail['amount'] ?></td>
                    <td><a href="change.php?id=<?php echo $detail['id'] ?>"> Change</a></td>
                    <td><a href="delete.php?id=<?php echo $detail['id'] ?>">Delete</a> </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        <a href="index.php">
            <button class="btn btn-success mt-3">PLACE MORE ORDER</button>
        </a>

    </center>
</body>

</html>