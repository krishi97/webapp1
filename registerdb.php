<?php
require_once('dbconnection.php');

$uname = $_POST['username'];
$pass  = $_POST['password1'];

$select_query = "insert into users(username, password) values('{$uname}','{$pass}')";
$execute_query = @mysqli_query($con, $select_query);
if($execute_query){
        echo 's';
    }
else{
    echo "Database Error";
}

?>