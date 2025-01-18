<?php

require 'config.php';

$e = $_POST["rEmail"];

$dsql = "DELETE FROM reservations WHERE Email='$e'";

if ($connection->query($dsql)) {
    echo "Deleted";
} else {
    echo "Not Deleted";
}
?>
