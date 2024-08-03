<?php
include('connection.php');


    echo "hsajdvh";
    $id=$_GET['id'];

    
    
    $q1=mysqli_query($conn,"DELETE FROM `contact_us` WHERE id=$id");
if($q1){
    echo "<script>
          window.location.href = 'dashboard_contactus.php';
          </script>";
}


?>