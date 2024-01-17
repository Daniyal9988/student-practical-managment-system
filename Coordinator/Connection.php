<?php
$conn=mysqli_connect("localhost","WPproject","abc123", "training");
if(!$conn)
{
die('Couldnotconnect:'.mysqli_connect_error());
}
?>