<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Manage</title>
    <style>
        form {
            margin-left: 30%;
            margin-top: 10%;
            margin-right: 30%;
            font-size: 30px;
        }
        
        .nhap {
            margin-left: 20%;
        }
    </style>
</head>

<body>
<div class="container bg-info">
        <form action="add.php" class="needs-validation" method = "POST">
            <h1 style="text-align: center">Add employee</h1>
            <div>
                <label>Name</label>
                <input type="text" class="form-control nhap"  placeholder="Enter name of product" name="name" required>
            </div>
            <div>
                <label>Phone Number</label>
                <input type="text" class="form-control nhap"  placeholder="Enter name of product" name="phone" required>
            </div>
            <div>
                <label>Address</label>
                <input type="text" class="form-control nhap"  placeholder="Enter name of product" name="address" required>
            </div>
            <button type="submit" class="btn btn-primary" name ="submit">Submit</button>
        </form>
    </div>
    <a href="Manage.php"> Back to Manage</a>
   <?php
   include_once "connect.php"; 
    if(!isset($_POST['submit']))
    {
    }
    else
    {
        $namepr = $_POST['name'];
        $price = $_POST['phone'];
        $price = $_POST['address'];
        $sql = "insert into quanly(name, phone,address) values ('$namepr', '$phone','$address')";
        $pdo->exec($sql);
        echo 'add Sucessfully';
    }
   ?>
</body>
</html>
