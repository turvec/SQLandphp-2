<?php
include_once "connection.php";

$id = $_GET['id'];
$query = "SELECT * from order where id = '$id'";
$details = $connection->query($query);
$details = $details->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>change order</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fa/css/all.min.css">
</head>

<body>

    <center>
        <h3 class="text-success">Change Order</h3>

        <form class="card card-body mt-5" action="change_action.php" method="post" style="width:50%;">
            <div class="form-group">
                <label class="text-success" for="">Name of Product</label>
                <input value="<?php echo $details['name'] ?>" class="form-control" name="name" type="text">
                <label class="text-success" for="">Amount</label>
                <input value="<?php echo $details['amount'] ?>" class="form-control" name="amount" type="text">
            </div>
            <input value="<?php echo $details['id'] ?>" class="form-control" name="id" type="hidden">
            <button class="btn btn-outline-success">SUBMIT</button>
        </form>
    </center>

</body>

</html>