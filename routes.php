<?php
$router->define([
    'php_todo' => 'controllers/home.php',
    'php_todo/new-task' => 'controllers/new-task.php', // kontrolerio paskirtis issiusti uzklausa ir gauti dduomenis ir atvaizduoti
    'edit-task' => 'controllers/edit-task.php',
    '404' => 'controllers/404.php',
]);
