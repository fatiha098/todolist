<?php
require_once 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['done'])) {
    $id = $_POST['id'];
    $done = $_POST['done']; // should be '0' or '1'

    // Use prepared statements to avoid SQL injection
    $stmt = $conn->prepare("UPDATE todo SET done = $done WHERE id = $id");
    if ($stmt) {
        $stmt->bind_param("ii", $done, $id);
        $stmt->execute();
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Redirect to index.php
    header("Location: index.php");
    exit();
}

mysqli_close($conn);
?>