<?php

class task
{
    static function task_all()
    {
        require('connect.php');
        $sql = "SELECT * FROM task";
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        return $tasks;
    }

    function task(int $id) {}

    function new_task()
    {
        require('connect.php');
        $name = $_POST['name'];
        $due_date = $_POST['due-date'];

        $sql = "INSERT INTO task(name, due_date, entry_date, priority, notes, status) VALUES('$name', '$due_date', CURDATE(), NULL, NULL, 'O')";

        mysqli_query($connection, $sql);

        header("Location:myhome.php");
    }

    function update_task() {}

    function delete_task() {}
}
