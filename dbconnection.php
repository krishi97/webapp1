<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'ikigai';
    $con = @mysqli_connect($host, $user, $password, $dbname);
    if(!($con)){
        echo "Failed<br>";
        echo "<b>Reason is</b> ".mysqli_connect_error();
    }
?>