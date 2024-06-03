<?php 
require_once 'conn.php';

if (isset($_POST['task']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

    $task = $_POST['task'];

    $sql = "INSERT INTO todo (title) VALUES ('$task')";

    $conn->query($sql);

    header("Location: index.php");

    mysqli_close($conn);
}

?>




