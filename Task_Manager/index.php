<?php               

$task_list = filter_input(INPUT_POST, "tasklist", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
if($task_list === NULL || $task_list ===  FALSE){
    $task_list = array();
}
$action = filter_input(INPUT_POST, "action");
$err = array();

switch ($action) {
    case 'add':
        $new_task = filter_input(INPUT_POST, "task");
        if (empty($new_task)) {
            $err[] = "The New Task Can't Be An Empty";
        }else {
            $task_list[] = $new_task;
        }
        break;
    case 'delete':
        $task_index = filter_input(INPUT_POST, "taskid", FILTER_VALIDATE_INT);
        if ($task_index === NULL || $task_index === FALSE) {
            $err[] = "The task cannot be deleted";
        }else {
            unset($task_list[$task_index]);
            $task_list = array_values($task_list);
        }
        break;
    
}
include("Task_List.php");


?>