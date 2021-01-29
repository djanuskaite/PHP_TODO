<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>TODO_LIST</title>
</head>
<body>
<style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #fffaf6;
    }

    .table {
        width: 80%;
        margin:auto;
    }

    .addnewtask {
        margin-right: 10em;
    }

</style>

<?php include ("view/_partials/header.view.php"); ?>
<?php
$title = "Task list";
?>

<h2 class="text-center mt-4"><?=$title;?></h2>
<p class="d-flex justify-content-end addnewtask"><a href="new-task">Add new task</a></p>

    <div class="table mb-5">
        <table class="table table-bordered table-active table-hover" id="display">
            <thead>
            <tr>
                <th class=" d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                    </svg>
                </th>
                <th class="text-center">Subject</th>
                <th class="text-center">Priority</th>
                <th class="text-center">Due Date</th>
                <th class=" d-flex align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                </th>
            </tr>
            </thead>
            <tbody id="tableBody">
            <?php foreach ($tasks->allTasks() as $task): ?>
            <tr>
                <td scope="col" class="text-center"><a href="complete-task/id/<?= $task['id']; ?>">Complete</a></td>

                <td scope="col" class="text-center"><?= $task['subject']; ?></td>
                <td scope="col" class="text-center"><?= $task['priority']; ?></td>
                <td scope="col" class="text-center"><?= $task['dueDate']; ?></td>

                <td scope="col" class="text-center"><a href="delete-task/id/<?= $task['id']; ?>">Delete</a></td>
            </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/33241e70c1.js" crossorigin="anonymous"></script>

<?php include ("view/_partials/footer.view.php"); ?>
</body>
</html>



