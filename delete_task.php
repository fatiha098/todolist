<?php

require_once 'conn.php';



    if(isset($_POST['id'])){

        $id = $_POST['id'];

    if ($sql = $conn->prepare("DELETE FROM todo WHERE id = $id")) {

        $sql->execute();
        $sql->close();
    }

    $conn->close();

    header("Location: index.php");
    
    exit();
} else {
    echo "No data-id received.";
}




?>

