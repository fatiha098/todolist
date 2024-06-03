<?php 

    require 'conn.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" 
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
    crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>TodoList</title>
</head>
<body class="m-3">
    <h1  class="fs-4 p-3 text-light bg-dark ">TodoList</h1>

    <form action="add_task.php" method="POST" class=" d-inline-flex" id="form">
        <input type="text" placeholder="Task Title" name="task" id="task" class="form-control me-2">
        <input type="submit"  class="add btn btn-primary" value="add">
    </form>
<br>
<br>

    <?php  include "select_task.php"; ?>    


    <script>
        var dels = document.querySelectorAll(".del");

        dels.forEach(del => del.addEventListener("click", function(event){

            del.parentElement.parentElement.remove();

        }
        )
        );
    </script>
</body>
</html>