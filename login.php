<?php
include('dbconnection.php');
include('index.php');
if(isset($_POST['submit1'])){
    $email1= $_POST['email1'];
    $password1 =$_POST['password1'];
    $query1 ="select * from register where email ='$email1'";
    $query1_run =mysqli_query($conn,$query1);
    $row =mysqli_fetch_assoc($query1_run);
    
    echo $pass_fetch=$row['password'];
    $pwd_verify =password_verify($password1,$pass_fetch);
    
    if($pwd_verify){
        echo "<script>window.open('home.php?success=logged in successfull','_self')</script>";
    }
    else{
        echo "<script>window.open('index.php?error=username or password is incorrect','_self')</script>";
    }
}


?>