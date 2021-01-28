<?php
$title = "New Task";
?>

<h2><?=$title;?></h2>

<form method="post">
    <input type="text" name="subject" placeholder="enter new task">
    <select name="priority">
        <option value="svarbu">Important</option>
        <option value="nesvarbu">Not Important</option>
        <option value="skubu">Urgent</option>
        <option value="neskubu">Not Urgent</option>
    </select>
    <label>Due date</label>
    <input type="date" name="duedate">
    <button type="submit" name="send">Add Task</button>
</form>
