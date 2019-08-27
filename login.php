<?php 
    session_start();
    include_once "connect.php";
    $sql = "SELECT * FROM account where name = :usernamestore and mk = :pass";
    $stmt = $pdo->prepare($sql);
    $stmt->execute
    (
        array(
            'usernamestore' => $_POST['username'],
            'pass' => $_POST['pass'],
        )
    );
    $count = $stmt->rowCount();
    if($count > 0)
    {   
        echo "<h1>Sss</h1>"; 
        $_SESSION['username'] = $_POST['username'];
        header("Location: Manage.php");
        
    }
    else
    {
        echo "<h1>Sai username or pass</h1>";
    }      
?>
