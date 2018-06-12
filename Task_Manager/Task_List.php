<?php 

require_once("view/header.php");

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <!--  input  add-->
            <form action="." method="POST">
            <div class="md-form">
                <?php foreach($task_list as $task) : ?>
                <input placeholder="Add Task" type="hidden" name="tasklist[]" value="<?php print  htmlspecialchars($task);?>" id="inputPlaceholderEx" class="form-control">
<?php endforeach; ?>
                <input placeholder="Add Task" name="action" type="hidden" id="inputPlaceholderEx" class="form-control" value="add">
                <input placeholder="Add Task" type="text"  name ="task" id="inputPlaceholderEx" class="form-control">
                <label for="inputPlaceholderEx">Add Task</label>
                <button type="submit" class="btn btn-purple btn-sm">add</button>
            </div>
            </form>
        </div>
        <div class="col-md-4">
        <!-- input delete-->
        <?php if(count($task_list) > 0) :?>
        <form action="." method="POST">
        <div class="md-form">
                <?php foreach($task_list as $task) :?>
                <input placeholder="delete Task" type="hidden" name="tasklist[]" value="<?php print  htmlspecialchars($task);?>" id="inputPlaceholderEx" class="form-control">
<?php endforeach;?>
                <input placeholder="" type="hidden" name="action" value="delete" id="inputPlaceholderEx" class="form-control">
                <div class="form-group">
                <label for="exampleFormControlSelect1"></label>
                <select class="form-control" name="taskid"id="exampleFormControlSelect1">
                  <?php foreach($task_list as $id => $task) : ?>
                  <option value="<?php print $id; ?>"><?php print htmlspecialchars($task); ?></option>  
<?php endforeach; ?>
                </select>
            </div>
                <button type="submit" class="btn btn-purple btn-sm">delete</button>
            </div>
            </form>
<?php endif;?>
        </div>
        <div class="col-md-4">
               <!--display an erros-->
               <?php if(count($err) > 0) :?>
               <h4 class="text-danger">Error</h4>
               <ul>
                <?php foreach($err as $error) : ?>
                <li><?php print $error; ?></li>
    <?php endforeach;?>
            </ul> 
    <?php endif;?>
            <!--if there no task was created -->
            <?php if(count($task_list) === 0): ?>
            <p class="text-mute text-danger ml-5"> There No Task Into Our List Taks</p>
<?php else: ?>
            <ul>
                <?php foreach($task_list as $id => $task) :?>
                <li><?php print $id + 1 . "." . htmlspecialchars($task); ?>
<?php endforeach;?>
            </ul>
<?php endif;?>
       
        </div>
    </div>
</div>


<?php require_once("view/footer.php"); ?>