<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/33241e70c1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/style.css" type="text/css">
    <title>To Do List</title>
</head>
<body>

<div class="container">
    <h1 class="text-center mb-5 mt-5">My To Do List</h1>
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


    </div>

    <div class="row">
        <div class="table-responsive">
        <table class="table table-bordered table-active table-hover" id="display">
            <thead >
            <tr>

                <th scope="col" class="text-center"><i class="far fa-check-circle fa-lg"></i></th>

                <th scope="col" class="text-center">Subject</th>
                <th scope="col" class="text-center">Priority</th>
                <th scope="col" class="text-center">Due date</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center">Percent completed</th>

                <th scope="col" class="text-center"><i class="fas fa-trash fa-lg"></i></th>
            </tr>
            </thead>
            <tbody id="tableBody">
            </tbody>
        </table>
        </div>
        <!--close the table-->
    </div>
</div>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>