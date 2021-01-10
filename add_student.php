<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!--Bootstrap 4 is designed to be responsive to mobile devices-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-font awesome--->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="style.css">
<script>
    jQuery(document).ready(function($){
        $('#toggler').click(function(event)){
            {
                event.preventDefault();
                $('#wrap').toggleClass('toggled');
            }
            
        });
    });
</script>
</head>
<body>
<!---sidebar start-->

    <div class="d-flex" id="wrap">
        <div class="sidebar bg-light boarder light">
            <div class="sidebar-heading">
                <p class="text-center">Manage student</p>
            </div>
            <ul class="list-group list-group-flush">
                <a href="" class="list-group-item list-group-item-action">
                    <i class="fa fa-vcard-o"></i>Dashboard
                </a>
                <a href="" class="list-group-item list-group-item-action">
                    <i class="fa fa-user"></i>Add Student
                </a>
                <a href="" class="list-group-item list-group-item-action">
                    <i class="fa fa-eye"></i>View Student
                </a>
                <a href="" class="list-group-item list-group-item-action">
                    <i class="fa fa-pencil"></i>Edit Student
                </a>
                <a href="" class="list-group-item list-group-item-action">
                    <i class="fa fa-sign-out"></i>Log out
                </a>
            </ul>
        </div>
        <div class="main-body">
            <button class="btn btn-outline-light bg-warning " id="toggler">
                <i class="fa fa-bars"></i>
            </button>
      
<!---sidebar end-->
<section >
    <h2 class="text-center text-primary font-weight-bold">Student Management system</h2>
    <h3 class="text-center text-primary font-weight-bold"><?php echo @$success;?></h3>
    <div class="container bg-warning" id="formsetting">
        <h3 class="text-center text-white pb-3 pt-3 font-weight-bold">Add Student Detail</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                 <div class="col-md-5 col-sm-5 col-12 m-auto">
                 <div class="form-group">
                        <label class="text-white">First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="Enter your firstname" required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Gender</label>
                       <input type="radio" name="radio" value="male" class="form-check-input ml-2" require="required">
                       <label class="form-check-label text-white pl-4">Male</label>
                       <input type="radio" name="radio" value="female" class="form-check-input ml-2" required="required">
                       <label class="form-check-label text-white pl-4">Female</label>
                    </div>
                 <div class="form-group">
                        <label class="text-white">Father Name</label>
                        <input type="text" name="fathername" class="form-control" placeholder="Enter your fathername" required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">City</label>
                        <input type="text" name="city" class="form-control" placeholder="Enter your city" required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Nationality</label>
                        <input type="text" name="nation" class="form-control" placeholder="Enter your nationality" required="required">
                    </div>
                    <input type="submit" value="Add Detail" name="add" class="btn btn-primary">
                </div>

                 <div class="col-md-5 col-sm-5 col-12 m-auto">
                 <div class="form-group">
                        <label class="text-white">Last Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Enter your lastname" required="required">
                    </div>
                    
                    <div class="form-group">
                        <label class="text-white">Bithdate</label>
                        <input type="date" name="birthday" class="form-control" placeholder="Enter your Birthdate" required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Mobile</label>
                        <input type="text" name="mobile" class="form-control" placeholder="Enter your mobileno." required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">District</label>
                        <input type="text" name="dist" class="form-control" placeholder="Enter your district." required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">state</label>
                        <input type="text" name="state" class="form-control" placeholder="Enter your state." required="required">
                    </div>
                    <div class="form-group">
                        <label class="text-white">Upload photo</label>
                        <input type="file" name="image" class="form-control"  required="required">
                    </div>
                    
                 </div>
            </div>
        </form>
    </div>
</section>
</div>
 </div>
</body>
</html>
<?php
include('dbconnection.php');
error_reporting(0);

if(isset($_POST['add'])){
    $firstname =mysqli_real_escape_string($conn,$_POST['fname']);
    $lastname =mysqli_real_escape_string($conn,$_POST['lname']);
    $email =mysqli_real_escape_string($conn,$_POST['email']);
    $fathername =mysqli_real_escape_string($conn,$_POST['fathername']);
    $gender =mysqli_real_escape_string($conn,$_POST['radio']);
    $city =mysqli_real_escape_string($conn,$_POST['city']);
    $nationality =mysqli_real_escape_string($conn,$_POST['nation']);
    $birthdate =mysqli_real_escape_string($conn,$_POST['birthday']);
    $mobile =mysqli_real_escape_string($conn,$_POST['mobile']);
    $district =mysqli_real_escape_string($conn,$_POST['dist']);
    $state =mysqli_real_escape_string($conn,$_POST['state']);
    $image=$_FILES['image'];
    $image_name =$_FILES['image']['name'];
    $image_tmpname =$_FILES['image']['tmp_name'];
    $image_size =$_FILES['image']['size'];
    $image_type =$_FILES['image']['type'];

    if(!$image_type =='image/jpg' or !$image_type == 'image/png'){
        
        echo "<script>alert('invalid image format')</script>";
    }
    else if($image_size > 2000000){
        
        echo "<script>alert('image size is larger. Image size should be less than 200 MB')</script>";
    }
    else{
        move_uploaded_file($image_tmpname, "image/".$image);
        $sql = "insert into add_student (firstname,lastname,email,gender,fathername,birthdate,mobile,city,nationality,district,state,image) 
        values ('$firstname','$lastname','$email','$gender','$fathername','$birthdate','$mobile','$city','$nationality','$district','$state','$image')";

        $query_run =mysqli_query($conn,$sql);
        if($query_run){
            
           $success ="student data submmited successfully" ;
        }
        else{
            
            echo"<script>alert('data not submmited please try again')</script>" ;
        }
    }
}

?>