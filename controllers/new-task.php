<?php
use TaskManager\DB;
use TaskManager\Task;
use TaskManager\Validation;

require 'inc/data.php';

if(isset($_POST['send']) ){
    // pasikviest validation klase ir pasitikrinti ar duomenys yra validus
    $validate=Validation::validate($_POST);
//    var_dump($validate);
}
if(isset($_POST['send']) & empty($validate)){ // jei mygtukas send paspaustas ir klaidu nera:

    $connections = DB::connect();
    $task = new Task($connections);
    $task->createTask($_POST);
}else{
    require  'view/pages/new-task.view.php';
}
