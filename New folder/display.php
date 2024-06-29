<?php
session_start();
include("database.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
    <div style="text-aligh:center;padding:15%;">
        <p style="font-size:50px;font-weight:bold;">
            Hello<?php
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn,"Select * from users where email='$email'");
                if($query->num_rows>0){
                    $row=$query->fetch_assoc();
                    echo $row['name'];
                }
            }
            ?>
        </p>
</div>
</body>
</html>