<?php
error_reporting(0);

$db = mysqli_connect("localhost", "root", "", "todo");

if(mysqli_connect_errno()) {
    echo "Failed to connect to database" . mysqli_connect_error();
}

$query = "SELECT * FROM task_list"; 
$sql = mysqli_query($db, $query);

if(mysqli_num_rows($sql)>0) {
    while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td class='tname'>" . $row['name'] . "</td><td class='tstatus'>" . $row['status'] . "</td><td><a class='task-edit-btn waves-effect waves-light-btn'><i class='material-icons'>edit</i></a></td><td><a href='php/delete_task.php?id=" . $row['id'] ."' class='waves-effect waves-light-btn'><i class='material-icons'>delete</i></a></td></tr>";
    }
}
?>