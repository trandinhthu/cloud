
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
</head>

<body>
    <header>
    </header><br>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <td><a href="./add.php"><button class="btn btn-primary">Add account</button></a></td>
        </tr>
    <?php require_once "connect.php";
        $sql = "select * from quanly";
        $result = $pdo->query($sql);
        // $stmt->setFetchMode(PDO::FETCH_ASSOC);
        // $stmt->execute();
        // $result = $stmt->fetchAll();    
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {         
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['phone']."</td>"; 
        echo "<td>".$row['address']."</td>";   
        echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
    ?>
    </table>
    
</body>

</html>
