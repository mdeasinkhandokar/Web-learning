<?php
session_start();



$_SESSION["username"]="orange";


unset($_SESSION["username"]);
session_unset();

session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
echo $_SESSION["username"];


?>


</body>
</html>