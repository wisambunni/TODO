<?php
//error_reporting(0);

$db = mysqli_connect("localhost", "root", "", "todo");

if(mysqli_connect_errno()) {
    echo "Failed to connect to database" . mysqli_connect_error();
}

if(isset($_POST['enter'])) {
    $task_id = $_GET['id'];
    $task_name = mysqli_real_escape_string($db, $_POST['task-name']);
    $task_status = mysqli_real_escape_string($db, $_POST['task-status']);

    $query = "UPDATE task_list SET name='$task_name', status='$task_status' WHERE id='$task_id'"; 
    $sql = mysqli_query($db, $query);

    if($sql) {
        // echo '$task_name';
        // echo '$task_status';
        header('location:../index.php');
        // header("refresh:10; url=../index.php");
    }

    echo "ERROR: Failed to edit Task. Please try again";
    header("refresh:10; url=../index.php");
}

mysql_close();

?>