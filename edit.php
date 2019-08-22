<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
        <?php 
        include_once "connect.php";
        if(isset($_POST['edit']))
        {    
            //$id = $_POST['id'];
            $name = $_POST['name'];
            $price = $_POST['price'];
        }
        else
        {
            $sql = "UPDATE product SET namepr = :name, price=:price WHERE product.id=:id";
            $query = $pdo->prepare($sql);
            $query->bindparam(':id', $id);
            $query->bindparam(':name', $name);
            $query->bindparam(':price', $price);
            $query->execute();
            if(($pdo->query($sql)) == true){
                header("location: Manage.php");
            }
            else {
                echo "error";
                echo "$sql";
            }
            
        } 
            $id = $_GET['id'];
            $sql = "SELECT * FROM product WHERE id=:id";
            $query = $pdo->prepare($sql);
            $query->execute(array(':id' => $id));
 
            while($row = $query->fetch(PDO::FETCH_ASSOC))
                {
                    $name = $row['namepr'];
                    $price = $row['price'];
                }   
        ?>
    <div class="container bg-info">
        <form action="edit.php" class="needs-validation" method = "POST">
            <input type="hidden" name="id"></<input>
            <h1 style="text-align: center">Edit Product</h1>
            <div>
                <label>Name of product</label>
                <input type="text" class="form-control nhap"  placeholder="Enter name of product" name="name" value="<?php echo $name;?>" required>
            </div>
            <div>
                <label>Price</label>
                <input type="number" class="form-control nhap"  placeholder="Enter price of product" value="<?php echo $price;?>" name="price" required>
            </div>
            <button type="submit" class="btn btn-primary" name ="edit">Edit</button>
        </form>
    </div>
    <a href="Manage.php"> Back to Manage</a>
</body>
</html>