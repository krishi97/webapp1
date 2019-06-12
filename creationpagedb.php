<?php
require_once('dbconnection.php');

$result = $_POST['result'];
$uname = $_POST['uname'];
$date = date("Y-m-d");

$select_query = "insert into userikigai(username, date, ikigai) values('{$uname}', '{$date}', '{$result}') ";
$execute_query = @mysqli_query($con, $select_query);
if($execute_query){
    echo 's';
    }
    else{
    echo mysqli_error($con);
}

?>