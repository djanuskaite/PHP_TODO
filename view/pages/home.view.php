<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/33241e70c1.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php include ("view/_partials/header.view.php"); ?>
<?php
$title = "Tasks list";
?>

<h2><?=$title;?></h2>
<p><a href="/new-task">Add new task</a></p>

<!--<ul>-->
<!--    --><?php //foreach ($tasks->allTasks() as $task): ?>
<!--        <li>--><?//=$task['subject'];?>
<!--            <ul>-->
<!--                <li>--><?//=$task['priority'];?><!--</li>-->
<!--                <li>--><?//=$task['dueDate'];?><!--</li>-->
<!--                <li><a href="/edit-task/id/--><?//=$task['id'];?><!--">Edit</a></li>-->
<!--                <li><a href="/edit-task/id/--><?//=$task['id'];?><!--">Delete</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--    --><?php //endforeach;?>
<!--</ul>-->

<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered table-active table-hover" id="display">
            <thead>
            <tr>
                <th>Complete</th>
                <th>Subject</th>
                <th>Priority</th>
                <th>dueDate</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody id="tableBody">
            <?php foreach ($tasks->allTasks() as $task): ?>
            <tr>
                <td scope="col" class="text-center"><a href="/complete-task/id/<?= $task['id']; ?>">Complete</a></td>

                <td scope="col" class="text-center"><?= $task['subject']; ?></td>
                <td scope="col" class="text-center"><?= $task['priority']; ?></td>
                <td scope="col" class="text-center"><?= $task['dueDate']; ?></td>

                <td scope="col" class="text-center"><a href="/delete-task/id/<?= $task['id']; ?>">Delete</a></td>
            </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php include ("view/_partials/footer.view.php"); ?>
</body>
</html>



