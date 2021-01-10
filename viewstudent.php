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
                <a href="add_student.php" class="list-group-item list-group-item-action">
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
    <div class="container bg-warning" id="formsetting">
        <h3 class="text-center text-white pb-3 pt-3 font-weight-bold">Welcome to View</h3>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <table class="table table-bordered text-white table-responsive">
                    <thead>
                      <tr>
                        <th>Sno.</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Birthdate</th>
                        <th>Mobile</th>
                        <th>City</th>
                        <th>District</th>
                        <th>State</th>
                        <th>Nationality</th>
                        <th>photo</th>
                        
                      </tr>
                    </thead>
                    <?php
                    include('dbconnection.php');
                    $sql ="select * from add_student";
                    $sql_run =mysqli_query($conn,$sql);
                    $i = 1;
                    while($row =mysqli_fetch_assoc($sql_run)){

                   
                    
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $row['firstname'];?></td>
                            <td><?php echo $row['lastname'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['birthdate'];?></td>
                            <td><?php echo $row['mobile'];?></td>
                            <td><?php echo $row['city'];?></td>
                            <td><?php echo $row['district']; ?></td>
                            <td><?php echo $row['state']; ?></td>
                            <td><?php echo $row['nationality']; ?></td>
                            
                            
                        </tr>
                    </tbody>
               <?php } ?>
                </table>
                
            </div>
        </div>
    </div>
</section>
</div>
 </div>
</body>
</html>