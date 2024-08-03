<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dairy wala</title>
</head>
<body>
    <h3>remove</h3>

</body>
</html>
<?php
include('connection.php');

    
        $id=$_GET['id'];
        $q1=mysqli_query($conn,"delete from addtocart where id=$id "); 
        if($q1)
        {
          
          echo "<script>
          window.location.href = 'displayCartProduct.php';
          </script>";
          
        } 

?>