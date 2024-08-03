<?php
if(isset($_FILES['file'])){
    $name_file=$_FILES['file']['name'];
    echo $name_file;
}
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
    <form>
        <input type="file" name="file"/><br><br>
        <input type="submit" name="submit" value="upload"/><br><br>
    </form>
</body>
</html>