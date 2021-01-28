<?php
$router->define([
    'php_todo' => 'controllers/home.php',
    'php_todo/new-task' => 'controllers/new-task.php', // kontrolerio paskirtis issiusti uzklausa ir gauti dduomenis ir atvaizduoti
    'php_todo/edit-task' => 'controllers/edit-task.php',
    'php_todo/404' => 'controllers/404.php',
]);
