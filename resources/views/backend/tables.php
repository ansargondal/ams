<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="../vendor/bootstrap-table/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="shortcut icon" href="../img/med-van.ico" type="image/x-icon">
    <title>Dashboard</title>
</head>
<body>


<main class="main">


    <div class="row tasks mt-5">
        <table class="table" data-toggle="table" data-pagination="true" data-search="true">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Date</th>
                <th class="text-center">Message</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>05</td>
                <td class="name">Ali Hamza</td>
                <td class="text-center email">alihamza@gmail.com</td>
                <td class="text-center date">oct 09, 2018</td>
                <td class="text-center">I need some infor about...</td>
                <p class="text-center full-message d-none">I need some infor about the task you are doing at home.
                    it might be really useful for my colleagues as well as for my boos. I 'll be really thankful to
                    you.
                </p>
                <td class="actions text-center">
                    <a href="#" class="action"><i class="fa fa-reply" aria-hidden="true"></i></a>
                    <a href="#" class="action js-view-message">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="action js-btn-delete" data-id="1" data-toggle="modal">
                        <a href="#" class="action js-btn-delete" data-id="1" data-toggle="modal">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div><!--tasks row-->
</main>


<!--task modal-->
<div class="modal fade" id="task-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">NEW TASK</h5>
                <a href="#" class="close" data-dismiss="modal">&times;</a>
            </div>
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" class="form-control" id="type" name="type">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="start-date">Start Date</label>
                                <input type="text" class="form-control datepicker" id="start-date"
                                       name="start_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="due-date">Due Date</label>
                                <input type="text" class="form-control datepicker" id="due-date" name="due_date">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="task">Task</label>
                                <input type="text" class="form-control" id="task" name="task">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary">SAVE <i class="fa fa-spinner hide_spinner" aria-hidden="true"></i>
                </button>
                <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!--!task modal-->
<!--Edit task modal-->
<div class="modal fade" id="task-edit-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EDIT TASK</h5>
                <a href="#" class="close" data-dismiss="modal">&times;</a>
            </div>
            <div class="modal-body">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" class="form-control" id="type" name="type">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="e-start-date">Start Date</label>
                                <input type="text" class="form-control datepicker" id="e-start-date"
                                       name="start_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="e-due-date">Due Date</label>
                                <input type="text" class="form-control datepicker" id="e-due-date" name="due_date">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="task">Task</label>
                                <input type="text" class="form-control" id="task" name="task">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn  btn-primary js-btn-update">UPDATE <i class="fa fa-spinner hide_spinner"
                                                                         aria-hidden="true"></i></button>
                <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!--!Edit task modal-->
<!--delete modal-->
<div class="modal" id="delete-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="delete.php" method="post">
                <div class="modal-header">
                    <h6 class="modal-title">CONFIRM DELETE</h6>
                    <a href="#" class="close" data-dismiss="modal">&times</a>
                </div>
                <div class="modal-body">
                    <p>Do you Really want to delete?</p>
                    <input type="text" name="id" id="id" class="d-none">
                </div>
                <div class="modal-footer">
                    <button class="btn  bg-danger" id="js-btn-delete" type="submit">Delete</button>
                    <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--!delete modal-->

<!--Message Moda-->
<div class="modal" id="message-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <a href="#" data-dismiss="modal" class="close">&times;</a>
                <div class="success">
                    <figure>
                        <svg version="1.1" id="check-svg" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 434.107 434.107" style="enable-background:new 0 0 434.107 434.107;"
                             xml:space="preserve">
<polygon points="412.895,67.303 155.815,324.378 21.213,189.777 0,210.99 155.815,366.804 434.107,88.516 "/>
</svg>
                        <svg id="circle-svg">
                            <circle cx="60" cy="60" r="45"/>
                        </svg>
                    </figure>
                </div>
                <div class="success-message">
                    <h3>SUCCESS!</h3>
                    <p>Mail sent succesfully
                        to ansarabbasgondal@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--!Message modal-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/bootstrap-table/dist/bootstrap-table.js"></script>

<script src="../js/global.js"></script>
<script src="../js/dashboard.js"></script>
<script src="../js/categories.js"></script>

</body>
</html>