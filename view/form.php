<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">

    <title>To Do List</title>
</head>
<body>

<div class="container">
    <div class="row todo-list-imput">
        <form class="col mx-auto" id="form">

            <div class="form-group row">
                <label for="subject" class="col-sm-2 col-form-label">Subject</label>
                <div class="col-sm-10">
                    <input type="subject" class="form-control" id="subject">
                </div>
            </div>

            <div class="form-group row">
                <label for="priority" class="col-sm-2 col-form-label">Priority</label>
                <div class="col-sm-10">
                    <select id="priority" class="form-control">
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
                    <input type="date" class="form-control" id="dueDate">
                </div>
            </div>

            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select id="status" class="form-control">
                        <option value="" disabled selected>Choose...</option>
                        <option>New</option>
                        <option>In Progress</option>
                        <option>Complete</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="proc" class="col-sm-2 col-form-label">Percent Completed</label>
                <div class="col-sm-10">
                    <select id="proc" class="form-control">
                        <option value="" disabled selected>Choose...</option>
                        <option>0%</option>
                        <option>25%</option>
                        <option>50%</option>
                        <option>75%</option>
                        <option>100%</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <!--              <input id="submitButton" class="btn btn-light" type="button" value="Submit">-->
                <button type="button" id="submit" class="btn btn-light">Submit</button>

            </div>

        </form>
        <!--close the form-->
    <!-- Viso container uzdarymas -->
</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<script src="js.js"></script>

</body>
</html>