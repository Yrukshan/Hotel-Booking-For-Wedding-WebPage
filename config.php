<?php

 $connection = new mysqli("localhost","root","","hotel reservation");

 if($connection->connect_error)
 {
    die("Connection failed".$connection->connect_error);
 }
 
?>