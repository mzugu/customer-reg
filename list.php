<?php
include 'config/database.php';

$sql = "SELECT name,dob FROM customers";
    $values = $connection->query($sql);  
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List | Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />

</head>
<body>
    <div class="container col-md-6 mt-3">
    <table class="table table-striped table-bordered">
        <thead class="bg bg-secondary">
            <tr>
                <th style="color: white">Customer Name</th>
                <th style="color: white">Birth Date</th>
            </tr>
        </thead>
        <tbody>
        <?php     
         
        foreach($values as $value){ ?>
        <tr>
            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['dob']; ?></td>
        </tr>
       <?php } ?>
            
        </tbody>
  
    </table>
    <a href="register.php"><button class="btn btn-primary">Add more Customers</button></a>
    
    </div>
</body>
</html>