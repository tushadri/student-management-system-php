
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style.css">

<script>
    function content1(){
        document.getElementById("div1").style.display="block";
        document.getElementById("div2").style.display="none";
    }
    function content2(){
        document.getElementById("div1").style.display="none";
        document.getElementById("div2").style.display="block";
    }
</script>
</head>
<body>
<section >
    <h2 class="text-center text-primary pt-5  font-weight-bold">Student management system</h2>
    <p class="text-center font-weight-bold text-danger"><?php echo $_GET['error'];?></p>
    <div class="container bg-warning" id="formsetting"><!--container start here-->
        <h3 class="text-white text-center py-3">Admin login | Register Panel</h3>
        
        <div class="row"><!--row start here-->
            <div class="col-md-7 col-sm-7 col-12">
                <img src="image/student-image.jpg" class="img-fluid image">
            </div>
            <div class="col-md-5 col-sm-5 col-12">
                <button class="btn btn-info px-5"  onclick="content1()">Register</button>
                <button class="btn btn-info px-5" onclick="content2()">Login</button>
                <!--div1 starts here-->
                <div id="div1" style="display: block;">
                <form action="" method="POST">
                    <div class="form-group">
                        <label class="text-white">Full Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="Enter your name" required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter your Email" required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter your Password" required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" placeholder="Enter your Password" required="required">
                    </div>
                    <input type="submit" name="submit"  value="Register" class="btn btn-success px-5">
                </form>
            </div>
            <!--div1 ends here -->
            <!--div2 start here-->
            <div id="div2" style="display:none">
                <form action="" method="POST">
                   
                    <div class="form-group">
                        <label class="text-white">Email</label>
                        <input type="text" name="email1" class="form-control" placeholder="Enter your Email" required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Password</label>
                        <input type="password" name="password1" class="form-control" placeholder="Enter your Password" required="required">
                    </div>
                    <input type="submit" name="submit1"   value="login" class="btn btn-success px-5">
                </form>
            </div>
            <!--div2 end here-->
            </div>
        </div><!--row end here-->
      </div><!--container end here-->  
</section>   
</body>
</html>
<?php
include('dbconnection.php');
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $cpassword= $_POST['cpassword'];

    $pass =password_hash($password, PASSWORD_BCRYPT);
    $cpass =password_hash($cpassword, PASSWORD_BCRYPT);

    $query ="select * from register where email='$email'";
    $query_run =mysqli_query($conn,$query);
    $row = mysqli_num_rows($query_run );
    if($row>0){
       echo "Email id already exist. Please try with another email";
    }
    else if($password !== $cpassword){
        echo "Your password donot match";
    }
    else{
        $sql ="insert into register (fname, email, password, cpassword) values ('$fname','$email','$pass','$cpass')";
        $run =mysqli_query($conn,$sql);
        if($run){
           echo "Registered Successfully";
        }
        else{
            echo "Unable to submit data , please try again";
        }
    }
}
?>

