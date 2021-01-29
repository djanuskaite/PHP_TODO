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
<style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #fffaf6;
    }

    #form {
        width: 80%;
        margin:auto;
    }

    .btn {
        background-color: #b9a195;
    }

</style>

<?php include ("view/_partials/header.view.php"); ?>

<?php
$title = "Add new task";
?>

<h2 class="text-center m-5"><?=$title;?></h2>

<form method="post" class="col mx-auto" id="form">
    <div class="form-group row">
        <label for="subject" class="col-sm-2 col-form-label">Subject</label>
        <div class="col-sm-10">
            <input type="text" name="subject" class="form-control" id="subject">
        </div>
    </div>

    <div class="form-group row">
        <label for="priority" class="col-sm-2 col-form-label">Priority</label>
        <div class="col-sm-10">
            <select id="priority" class="form-control" name="priority">
                <option value="" disabled selected>Choose</option>
                <option>Low</option>
                <option>Normal</option>
                <option>High</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="dueDate" class="col-sm-2 col-form-label">Due date</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="dueDate" name="dueDate">
        </div>
    </div>

    <div class="form-group text-center">
    <button type="submit" name="send" class="btn">Add Task</button>
    </div>
</form>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php include ("view/_partials/footer.view.php"); ?>
</body>
</html>
