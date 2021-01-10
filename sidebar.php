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
            <button class="btn btn-outline-light bg-danger " id="toggler">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </div>
</body>
</html>