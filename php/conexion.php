<?php

$con= new mysqli('localhost', 'root','', 'login_register');

if($con->connect_error){

    die('Error' . $con->connect_error);
}
?>