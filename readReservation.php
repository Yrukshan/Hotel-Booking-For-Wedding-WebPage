<?php

require 'config.php';

$sql="SELECT ReservationID,GroomName,BrideName,Email,ContactNumber,FunctionDate,NumberOfGuests,NumberOfRooms,FunctionType,FunctionTime,PaymentMethod FROM reservations";

$result=$connection->query($sql);

if($result->num_rows>0)
{
    echo "<table border='1'>";
    while($row=$result->fetch_assoc())
    {
        echo "<tr>";
        echo "<td>".$row["ReservationID"]."</td>"."<td>".$row["GroomName"]."</td>"."<td>".$row["BrideName"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["ContactNumber"]."</td>"."<td>".$row["FunctionDate"]."</td>"."<td>".$row["NumberOfGuests"]."</td>"."<td>".$row["NumberOfRooms"]."</td>"."<td>".$row["FunctionType"]."</td>"."<td>".$row["FunctionTime"]."</td>"."<td>".$row["PaymentMethod"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo "No Result";
}

$connection->close();


?>