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
        $_SESSION['username'] = $_POST['username'];
        header("Location: Manage.php");
        
    }
    else
    {
        echo "<h1>Sai username or pass</h1>";
    }

    $sql = "SELECT * FROM manage where name = :username and mk = :pass";
    $stmt = $pdo->prepare($sql);
    $stmt->execute
    (
        array(
            'username' => $_POST['username'],
            'pass' => $_POST['pass'],
        )
    );
    $count = $stmt->rowCount();
    if($count > 0)
    {   
        $_SESSION['username'] = $_POST['username'];
        header("Location: capcao.php");
        
    }
    else
    {
        echo "<h1>Sai username or pass</h1>";
    }

        
?>
