<?php
include('heder.php');
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dairy wala</title>
</head>
<body>
<form method='post'>
    <div class="col-lg-50 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Contactus Table</h4>
                    <div class="table-responsive">


                    <?php 
                      $s = mysqli_query($conn, "SELECT * FROM  contact_us");
                    ?>

                      <table class="table">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                          </tr>
                        </thead>

                        <?php

                          $i = 1;


                          while($row = mysqli_fetch_assoc($s))
                          {
                              echo '<tr>';
                              echo "<td>".$i."</td>";
                              echo "<td>".$row['name']."</td>";
                              echo "<td>".$row['email']."</td>";
                              echo "<td>".$row['message']."</td>";
                              $i++;
                        ?>
                        
                              
                                  
                              
                        <?php    

                                    $id = $row['id'];
                                    

                                    
                                    echo "<td><a href='contactus_delete.php?id=$id'  style='color:white;'><button type='submit' name='s1' class='btn btn-primary'>Delete</a></td>";
                             
                          }

                       ?>                       
                      </table>
                    </div>
                  </div>
                </div>
              </div>
    </form>
</body>
</html>

<?php
include('footer.php');
?>