<?php
$HOSTNAME="Localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="thinkfix";
$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);
if($con){
    echo" ";
}
else{
    die(mysqli_error($con));
}
?>