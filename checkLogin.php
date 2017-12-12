
<html>
<body>



<?php
/**
 * Created by PhpStorm.
 * User: Simon_
 * Date: 12-12-2017
 * Time: 13:58
 */

$username = "root";
$password = "root";




$inputPassword = $_POST["inputPassword"];
$inputUsername = $_POST["inputUser"];

if($username == $inputUsername && $inputPassword == $password){
    header("Location: http://dr.dk");
    die();

}

else{
    header("Location: img/haha.gif");
    die();

}



?>
</body>
</html>
