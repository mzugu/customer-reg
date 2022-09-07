<?php

include('config/database.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer | Registration</title>
    <style>
        h3{
            text-align: center;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container col-md-4 mt-3">
        <h3 class="text-secondary">Customer Registration App</h3>
        <form action="register.php" method="POST" class="form">
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                </div>
                <input type="text" name="name" placeholder="Customer Name Here" class="form-control" required>
            </div><br>

            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Customer's Birth Date</span>
                </div>
                <input type="date" name="dob" class="form-control" required>
            </div><br>
            
            <div class="d-grid">
                <button type="submit" name="submit" class="btn btn-outline-primary btn-block">Register Customer</button>
            </div>
            
    <?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $dob = $_POST['dob'];

    $sql = "INSERT INTO `customers` (`name`, `dob`) VALUES ('$name', '$dob')";
    
    if($connection->query($sql) === TRUE){
        echo '
        <script type="text/javascript">
        $(document).ready(function(){
            swal({
                title: "Customer Added!",
                icon: "success",
                button: "Ok",
              });
        });
        </script>
        ';
           
    }else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
   
  }

  $connection->close();

?>
        </form><br>
        <a href="list.php"><button class="btn btn-primary">Check Customers</button></a>

    </div>


    
  
</body>
</html>
