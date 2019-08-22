<?php 
//  $dbconn3 = pg_connect("host=ec2-50-19-222-129.compute-1.amazonaws.com port=5432 dbname=d59drdf1vuv8v9 user=qaotrimwoaboes password=9530aa2adfbe2297542280a0d4fe9fc0b4ca4f020c4a483a94f75e5ba15035e7");
$pdo = new PDO('pgsql:host=ec2-54-243-241-62.compute-1.amazonaws.com; port=5432; dbname=dddh1g3of1vqfp', 'dmxxhvbkzuvjsh', '824b1d33afdd6c310844c654046e3e8df654b3f4ef80fde53b46118045157415');
if(!$pdo)
{
    echo "loi";
}
else
{
    echo"done";
}
// if(!$dbconn3)
// {
//     echo "fail";
// }
// else
// {
//     echo "ok";
// }
?>