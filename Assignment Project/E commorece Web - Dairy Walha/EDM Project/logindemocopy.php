<?php

$servername="localhost";
$username="root";
$password="";
$dbname="onlinedairysystem";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
die("connection failed : ".$conn->connect_error);
}

session_start();



if(isset($_POST['s1']))
{
  
        echo "connected";
        $email=$_POST['email'];
        $password=$_POST['password1'];
        $select = " SELECT * FROM user_form WHERE email = '$email' AND pasword = '$password' AND user_type = 1";
        // if(!mysqli_query($conn,"SELECT * FROM user_form WHERE "));
        $result = mysqli_query($conn, $select);
        $_SESSION['email']=$email;

        if(mysqli_num_rows($result))
        {
          echo "
          <script>
         
              window.location.href = 'dashboard.php';
          </script>
          ";
        }
        else{
          echo "
          <script>
         
              window.location.href = 'index.php';
          </script>
          ";
          $error[] = 'incorrect email or password!';
      }
       
       
       

}



?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dairy wala</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
     .card-registration .select-input.form-control[readonly]:not([disabled]) {
    font-size: 1rem;
    line-height: 2.15;
    padding-left: .75em;
    padding-right: .75em;
    }
    .card-registration .select-arrow {
    top: 13px;
    } 
    .card-registration .error-msg{
        margin:10px 0;
        display: block;
        background: crimson;
        color:#fff;
        border-radius: 5px;
        font-size: 1rem;
        padding:10px;
    }
  </style>
</head>
<body style="background-color:#212529">
  <form method="post">
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="dairy.jpg" alt="Sample photo" class="img-fluid" style="height: 675px; width: 630px; border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
            <h3 align="center" style="margin-right:  20px; margin-top:150px">Login Now</h3><br><br>
            <?php
              if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
              }
            ?>
 <div class="form-outline mb-4">
    <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Enter Email Address" style="width: 600px;"/>
  </div>
  <div class="form-outline mb-4">
    <input type="password" name="password1" id="form2Example2" class="form-control" placeholder="Enter Your Password" style="width: 600px;"/>
  </div>    
  <!-- Submit button -->
  <button type="submit" name="s1" class="btn btn-primary btn-block mb-4" style="margin-right:100px;width: 600px;">Login Now</button>
  <!-- Register buttons -->
  <div class="text-center">
    <p>don`t have an account? <a href="registration.php">register now</a></p>
    <button type="button" class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>
</body>
</html>

