<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" 
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
    crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>

<?php 
require_once 'conn.php';

$task = $conn->query("SELECT * FROM todo ORDER BY id DESC");
?>
<html>
    

    <div id="display-task" >
                <?php  if($task->num_rows > 0){

            while($tsk = $task->fetch_assoc()) {?>


            <div class="row-task d-flex align-items-center justify-content-between alert alert-warning  rounded-0" id="task-<?php echo $tsk['id'];?>" >
                <span >
                    <?php echo $tsk['title'];?>
                </span>
                <div class="btns">
                    <button class="status btn btn-primary rounded-0 ms-4">Undo</button>
                    <button class="del btn btn-danger rounded-0" name="data-id" data-id="<?php echo $tsk['id'];?>" >X</button>
                    
                </div>
            </div>            
            <?php } 

            } else { ?>
                <div class="alert alert-info  rounded-0">No tasks found</div>
            <?php } ?>
    </div>


    
                
        
    <script>
        $(document).ready(function() {
            $('.del').on('click', function() {
                var id= $(this).attr('data-id');

                window.confirm("are you sure you want to delete the task?")

                $.post("delete_task.php", {id : id}, (data) => {
                    return ;
                }
                )
            })
        })
    </script>


</html>

<?php mysqli_close($conn);?>