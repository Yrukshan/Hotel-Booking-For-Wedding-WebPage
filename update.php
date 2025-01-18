<?php

require 'config.php';

$gN = $_POST["groomName"];
$bN = $_POST["brideName"];
$eM = $_POST["email"];
$cN = $_POST["number"];
$fD = $_POST["functionDate"];
$nG = $_POST["numberOfGuests"];
$nR = $_POST["numberOfRooms"];
$fT = $_POST["functionType"];
$fTi = $_POST["functionTime"];

if(empty($gN)||empty($bN)||empty($eM)||empty($cN)||empty($nG)||empty($nR)||empty($fT)||empty($fTi))
{
    echo "All Required";
}
else{
    $sql="UPDATE reservations set GroomName='$gN',BrideName='$bN',Email='$eM',FunctionDate='$fD',NumberOfGuests='$nG',NumberOfRooms='$nR',FunctionType='$fT',FunctionTime='$fTi' WHERE ContactNumber='$cN' ";

    if($connection->query($sql))
    {
        echo "Updated";
    }
    else
    {
        echo "Not Updated";
    }

}

?>
