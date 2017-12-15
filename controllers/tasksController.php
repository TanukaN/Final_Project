<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $task = todos::findOne($_REQUEST['id']);
        self::getTemplate('edit_task', $task);
    }

    public static function newToDoForm()
    {
        $task = new todo();
        self::getTemplate('createtask', $task);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        //$records = todos::findAll();
        session_start();
        $userID = $_SESSION['userID'];

        $tasks = todos::findTasksbyID($userID);

        /*session_start();
           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];
           } else {

               echo 'you must be logged in to view tasks';
           }
        $userID = $_SESSION['userID'];

        $records = todos::findTasksbyID($userID);*/

        self::getTemplate('all_tasks', $tasks);

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
        $task = new todo();
        session_start();
        date_default_timezone_set('America/New_York'    );
        $task->ownerid = $_SESSION['userID'];
        $task->owneremail = $_POST['owneremail'];
        $task->createddate = date('Y/m/d');
        $task->duedate = $_POST['duedate'];
        $task->message = $_POST['message'];
        $task->isdone = $_POST['isdone'];
        $task->save();
        header("Location: index.php?page=tasks&action=all");

    }

    //this is the function to view edit record form
    public static function edit()
    {
        $task = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $task);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {

    }

    public static function save() {
        $task = todos::findOne($_REQUEST['id']);

        $task->owneremail = $_POST['owneremail'];
        $task->duedate = $_POST['duedate'];
        $task->message = $_POST['message'];
        $task->isdone = $_POST['isdone'];

        $task->save();
        header("Location: index.php?page=tasks&action=all");
    }

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $task = todos::findOne($_REQUEST['id']);
        $task->delete();
        header("Location: index.php?page=tasks&action=all");

    }

    public static function gettaskform()
    {
        //https://www.sitepoint.com/why-you-should-use-bcrypt-to-hash-stored-passwords/
        //USE THE ABOVE TO SEE HOW TO USE Bcrypt
        self::getTemplate('new_task');
    }

}
