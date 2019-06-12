<?php
require_once('dbconnection.php');

$uname = $_POST['username'];
$pass  = $_POST['password'];

$select_query = "select * from users where username = '{$uname}' and password = '{$pass}'";
$execute_query = @mysqli_query($con, $select_query);
if($execute_query){
    $count = @mysqli_num_rows($execute_query);
    if($count<=0){
        echo "Incorrect Username or Password";
    }else{
        echo 's';
    }
    
}else{
    echo "Database Error";
}

?>