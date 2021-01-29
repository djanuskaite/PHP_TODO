<?php
use  TaskManager\Request;
use  TaskManager\DB;
use  TaskManager\Task;

$connection = DB::connect();
$tasks = new Task($connection);
$id = intval(basename(Request::uri()));
$tasks -> deleteTask($id);

