<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sql Assignment</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fa/css/all.min.css">
</head>

<body>

    <center>
        <h3 class="text-success">My first SQL FOOD ORDER Assignment</h3>

        <form class="card card-body mt-5" action="add_to_database.php" method="post" style="width:50%;">
            <div class="form-group">
                <label class="text-success" for="">Name of Product</label>
                <input class="form-control" name="name" type="text">
                <label class="text-success" for="">Amount</label>
                <input class="form-control" name="amount" type="text">
            </div>
            <button  class="btn btn-outline-success">SUBMIT</button>
        </form>
    </center>
    <a href="all_orders.php">
        <button class="btn btn-success mt-3">VIEW ALL ORDERS</button>
    </a>

</body>

</html>