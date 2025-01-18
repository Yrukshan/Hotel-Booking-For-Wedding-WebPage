
<?php

require 'config.php';

$gName=$_POST["groomName"];
$bName=$_POST["brideName"];
$email=$_POST["email"];
$number=$_POST["number"];
$fDate=$_POST["functionDate"];
$nGuest=$_POST["numberOfGuests"];
$nRooms=$_POST["numberOfRooms"];
$fType=$_POST["functionType"];
$fTime=$_POST["functionTime"];
$pMethod=$_POST["paymentMethod"];


$rSql="INSERT INTO reservations VALUES ('','$gName','$bName','$email','$number','$fDate','$nGuest','$nRooms','$fType','$fTime','$pMethod')";

if($connection->query($rSql))
{
    echo "Sucessful";
}
else{
    echo "Error".$connection->error;
}

$connection->close();

?>