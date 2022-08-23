

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ad_form_handling</title>
</head>
<body>
   
<form action="" method="post">
<input type="text" name="fm_name"><br>
<input type="text" name="fm_email"><br>
<input type="submit" value="add data">

</form>

</body>
</html>


<?php

if(isset($_POST['fm_name'])){
    $fm_name = $_POST['fm_name'];
    $fm_email = $_POST['fm_email'];
}


?>