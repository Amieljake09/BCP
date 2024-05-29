<?php

$con=new mysqli("localhost:3307", "root", "", "login_DB");

if(!$con){
    
    die(mysqli_error($con));
}

?>