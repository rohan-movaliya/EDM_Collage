<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dairy Wala</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body style="margin-left:380px; margin-right:380px;">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact <br>us directly. Our team will come back to you within
        a matter of hours to help you.</p>
    <div class="container py-4">

        <!-- Bootstrap 5 starter form -->
        <form id="contactForm" style="margin-left:100px;" method="post">
      
          <!-- Name input -->
          <div class="mb-3">
            <label class="form-label" for="name" >Name</label>
            <input class="form-control" id="name" name="name" style="width:500px;" type="text" placeholder="Name" data-sb-validations="required"/>
            <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
          </div>
      
          <!-- Email address input -->
          <div class="mb-3">
            <label class="form-label" for="emailAddress" >Email Address</label>
            <input class="form-control" id="emailAddress" name="email" style="width:500px;" type="email" placeholder="Email Address" data-sb-validations="required, email" />
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
          </div>
      
          <!-- Message input -->
          <div class="mb-3">
            <label class="form-label" for="message" >Message</label>
            <textarea class="form-control" id="message" name="message" type="text" placeholder="Message" style="height: 10rem;width:500px;" data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
          </div>
      
          <!-- Form submissions success message -->
          <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">Form submission successful!</div>
          </div>
      
          <!-- Form submissions error message -->
          <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
          </div>
      
          <!-- Form submit button -->
          
           <input type="submit" name="s1" class="btn btn-primary">
            <a href="index.php"><button type="button" class="btn btn-primary">Back</button></a> 
            
          
      
        </form>
      
      </div>
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['s1']))
{

    $name=$_POST['name']; 
    
    $email=$_POST['email']; 
    
    $message=$_POST['message']; 
    
    $q1=mysqli_query($conn,"INSERT INTO `contact_us`(`name`, `email`, `message`) VALUES ('$name','$email','$message')");

}
?>