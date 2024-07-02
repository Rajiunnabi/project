<?php
  include 'database.php';
  if(isset($_POST['signup'])){
     $name=$_POST['username'];
     $email =$_POST['email'];
     $password=$_POST['password'];
     $checkemail=sprintf("SELECT * FROM users WHERE email='%s'",
     mysqli_real_escape_string($conn, $email));
     $result=$conn->query($checkemail);
     if($result->num_rows>0){
        echo "Email already Exist";
     }else{
        try{
            $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $password);
            $stmt->execute();
            
            if (headers_sent()) {
                die("Redirect failed. Please click on this link: <a href=...>");
            }
            else{
                exit(header("Location: login.php"));
            }
        }catch(mysqli_sql_exception){
            echo "Error";
        }
       
     }
 }
 if(isset($_POST['login'])){
    $name=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $sql=sprintf("SELECT * FROM users WHERE name='%s' and password='%s' and email='%s'",
     mysqli_real_escape_string($conn, $name),mysqli_real_escape_string($conn, $password),mysqli_real_escape_string($conn, $email));
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        if (headers_sent()) {
            die("Redirect failed. Please click on this link: <a href=...>");
        }
        else{
            exit(header("Location: customer.php"));
        }
    }else{
        echo "NOT Found, Incorrect Email or Password";
    }
 }

?>