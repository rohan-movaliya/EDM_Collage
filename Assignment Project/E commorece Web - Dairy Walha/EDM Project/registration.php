
<?php
if(isset($_POST['s1']))
{
 
      $servername="localhost";
      $username="root";
      $password="";
      $dbname="onlinedairysystem";

      $conn=new mysqli($servername,$username,$password,$dbname);

      if($conn->connect_error)
      {
        die("connection failed : ".$conn->connect_error);
      }

      echo "connected";
      $first_name=$_POST['first_name'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $cpassword=$_POST['cpassword'];
      $user_type=$_POST['user_type'];
      $last_name=$_POST['last_name'];
      $mobile_no=$_POST['mobile_no'];
      $adress=$_POST['adress'];

      $select = " SELECT * FROM user_form WHERE email = '$email' && pasword = '$password' ";
      $result = mysqli_query($conn, $select);
      if(mysqli_num_rows($result) > 0)
      {

        $error[]= 'user already exist!';
  
      }
      else
      {
        if($password!=$cpassword){
          $error[]='password not match';
        }
        else{
        $query1="INSERT INTO `user_form`(`first_name`, `email`, `pasword`, `user_type`, `last_name`, `mobile_no`, `adress`) VALUES 
        ('$first_name','$email','$password','$user_type','$last_name','$mobile_no','$adress')";
  
            mysqli_query($conn,$query1);
        if($conn->query($query1)===true){
            echo "new record inserted successfully..";
            echo "
            <script>
                window.location.href = 'login.php';
            </script>
            "; 
        }
        else
        {
            echo "error : ".$sql."<br>".$conn->error;
        }
      }
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
  <form method='post'>
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="dairyproducts.jpg" alt="Sample photo" class="img-fluid" style="height: 730px; width: 630px; border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
            <h3 align="center" style="margin-right:  20px; margin-top:30px">Register Now</h3><br><br>
            <?php
              if(isset($error)){
                foreach($error as $error){
                  echo "<span class='error-msg' style='width: 600px;text-align:center;'>".$error."</span>";
                }
              }
            ?>
            <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="first_name" class="form-control" style="width: 280px;" placeholder="Enter first name"/>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="last_name" class="form-control" style="width: 280px;margin-left:-23px" placeholder="Enter Last name"/>
                  </div>

                </div>
              </div>
              <div class="form-outline mb-4">
                <input type="email" id="form2Example1" name="email" class="form-control" placeholder="Enter Your Email" style="width: 600px;"/>
              </div>
              <div class="form-outline mb-4">
                <input type="password" id="form2Example2" name="password" class="form-control" placeholder="Enter Your Password" style="width: 600px;"/>
              </div>
              <div class="form-outline mb-4">
                <input type="password" id="form2Example2" name="cpassword" class="form-control" placeholder="Confirm Your Password" style="width: 600px;"/>
              </div>
              <div class="form-outline mb-4">
                <input type="number" id="form2Example2" name="mobile_no" class="form-control" placeholder="Enter Mobile Number" style="width: 600px;"/>
              </div>
              <div class="form-outline mb-4">
                <input type="textarea" id="form2Example2" name="adress" class="form-control" placeholder="Enter Address" style="width: 600px;"/>
              </div>
              
<br>
              <!-- Submit button -->
              
              <button type="sumit" name="s1" class="btn btn-primary btn-block mb-4" style="margin-right:100px;width: 600px;">Register Now</button>
              <!-- Register buttons -->
              <div class="text-center">
                <p>already have account? <a href="login.php">login now</a></p>
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