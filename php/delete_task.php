<?php
error_reporting(0);

$db = mysqli_connect("localhost", "root", "", "todo");

if(mysqli_connect_errno()) {
    echo "Failed to connect to database" . mysqli_connect_error();
}
$task_id = $_GET['id'];
$query = "DELETE FROM task_list WHERE id='$task_id'"; 
$sql = mysqli_query($db, $query);

if($sql) {
    header('location:../index.php');
}
echo "ERROR: Failed to delete task. Please try again.";
header("refresh:4; url=../index.php");
?>