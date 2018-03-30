<?php
/**
 * Created by PhpStorm.
 * User: anika
 * Date: 3/28/18
 * Time: 12:44 AM
 */

$servername = "localhost";
$username = "root";
$password = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password);
mysqli_select_db($conn,'demo');
if(!$conn)
{
 echo " not connected to database";
}

?>
