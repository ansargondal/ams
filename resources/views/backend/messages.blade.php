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
    <!--    <link rel="stylesheet" href="../vendor/bootstrap-table/dist/bootstrap-table.min.css">-->
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Messages</title>
</head>
<body>
<div class="box header-box">
    <header class="header">
        <nav class="navbar navbar-light navbar-expand">
            <a href="#" class="navbar-brand js-sb-toggle">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
            </a>
            <span class="page-title">Messages</span>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link " data-toggle="dropdown">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                        <span class="badge badge-danger badge-pill">22</span>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">First </a>
                        <a href="#" class="dropdown-item">second</a>
                        <a href="#" class="dropdown-item">third</a>
                        <a href="#" class="dropdown-item">Fourth</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">View Profile</a>
                        <a href="#" class="dropdown-item">Edit Profile</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
</div>

<main class="main messages" id="messages">
    <div class="c-container">
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="messages-summary">
                            <li class="messages"><i class="fa fa-files-o" aria-hidden="true"></i></li>
                            <li>Messages</li>
                            <li><span class="divider"></span></li>
                            <li class="total">200</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="messages-summary">
                            <li class="read"><i class="fa fa-envelope-open" aria-hidden="true"></i></li>
                            <li>Read</li>
                            <li><span class="divider"></span></li>
                            <li class="total">200</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="messages-summary">
                            <li class="unread"><i class="fa fa-envelope" aria-hidden="true"></i></li>
                            <li>Unread</li>
                            <li><span class="divider"></span></li>
                            <li class="total">200</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div><!--!row-->
        <div class="row table-controls">
            <div class="col-md-2 ">
                <div class="form-group float-left">
                    <label for="search">Search</label>
                    <input type="text" class="form-control" id="search">
                </div>
            </div>
            <div class="col-md-4 offset-6">
                <!--                <a href="#">Read</a>
                                <a href="#">Unread</a>
                                <a href="#">All</a>-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table" id="messages-table" data-pagination="true" data-search="true" data-toggle="table">
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
                    <tr class="unread">
                        <td>01</td>
                        <td class="name">Ali Hamza</td>
                        <td class="text-center email">alihamza@gmail.com</td>
                        <td class="text-center date">oct 09, 2018</td>
                        <td class="text-center">I need some infor about...</td>
                        <p class="text-center full-message d-none">I need some infor about the task you are doing at
                            home.
                            it might be really useful for my colleagues as well as for my boos. I 'll be really thankful
                            to
                            you.
                        </p>
                        <td class="actions text-center">
                            <a href="#" data-toggle="tooltip" class="action js-btn-reply"
                               data-placement="top"
                               title="Reply">
                                <i class="fa fa-reply" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                               title="Read">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                               data-placement="top"
                               title="Delete">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr class="read">
                        <td>02</td>
                        <td class="name">Ali Hamza</td>
                        <td class="text-center email">alihamza@gmail.com</td>
                        <td class="text-center date">oct 09, 2018</td>
                        <td class="text-center">I need some infor about...</td>
                        <p class="text-center full-message d-none">I need some infor about the task you are doing at
                            home.
                            it might be really useful for my colleagues as well as for my boos. I 'll be really thankful
                            to
                            you.
                        </p>
                        <td class="actions text-center">
                            <a href="#" class="action js-btn-reply" data-toggle="tooltip" data-placement="top"
                               title="Reply">
                                <i class="fa fa-reply" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="action js-view-message" data-toggle="tooltip" data-placement="top"
                               title="Read">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                               data-placement="top"
                               title="Delete">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div><!--!row-->
    </div>
</main>


<!--Main Sidebar-->
<sidebar class="sidebar">
    <div class="sb-container">
        <p class="sb-brand">
            <a href="dashboard.php">
                <img class="img-fluid" src="../img/med-van.png" alt="AMS Logo"> <span class="title">AMS STORE</span>
            </a>
        </p>

        <ul class="sb-main-nav">
            <li class="sb-profile-container">
                <a href="#">
                <span class="sb-profile">
                    <img src="../img/profile.jpeg" alt="profile pic" class="img-fluid">
                </span>
                    Ansar Gondal</a>
                <ul class="sb-sub-nav">
                    <li><a href="user-profile.php"><span class="initials">MP</span>My Profile</a></li>
                    <li><a href="user-profile.php"><span class="initials">EP</span>Edit Profile</a></li>
                    <li><a href="user-profile.php"><span class="initials">S</span>Settings</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#">
                    <i class="fa fa-industry" aria-hidden="true"></i>DASHBOARD
                </a>
                <ul class="sb-sub-nav">
                    <li><a href="dashboard.php" class="active"><span class="initials">O</span>Overview</a></li>
                    <li><a href="dashboard.php"><span class="initials">S</span>Stats</a></li>
                </ul>
            </li>
            <li>
                <a href="messages.php">
                    <i class="fa fa-envelope" aria-hidden="true"></i>MESSAGES
                    <span class="badge badge-danger">22</span>
                </a>
                <ul class="sb-sub-nav">
                    <li><a href="messages.php"><span class="initials">VA</span>View All</a></li>
                    <li><a href="messages.php"><span class="initials">R</span>Read</a></li>
                    <li><a href="messages.php"><span class="initials">UR</span>Unread</a></li>
                </ul>
            </li>
            <li>
                <a href="categories.php ">
                    <i class="fa fa-th" aria-hidden="true"></i>CATEGORIES
                </a>
                <ul class="sb-sub-nav">
                    <li><a href="categories.php"><span class="initials">AN</span>Add New</a></li>
                    <li><a href="categories.php"><span class="initials">VA</span>View All</a></li>
                </ul>
            </li>
            <li>
                <a href="products.php">
                    <i class="fa fa-cube" aria-hidden="true"></i>PRODUCTS
                </a>
                <ul class="sb-sub-nav">
                    <li><a href="products.php"><span class="initials">AN</span>Add New</a></li>
                    <li><a href="products.php"><span class="initials">VA</span>View All</a></li>
                    <li><a href="products.php"><span class="initials">IS</span>In Stock</a></li>
                    <li><a href="products.php"><span class="initials">OS</span>Out of Stock</a></li>
                </ul>
            </li>
            <li>
                <a href="inventory.php">
                    <i class="fa fa-list" aria-hidden="true"></i>INVENTORY
                </a>
                <ul class="sb-sub-nav">
                    <li><a href="inventory.php"><span class="initials">NS</span>New Sale</a></li>
                    <li><a href="inventory.php"><span class="initials">NS</span>All Sales</a></li>
                    <li><a href="inventory.php"><span class="initials">NS</span>Report</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user-secret" aria-hidden="true"></i>CUSTOMERS
                </a>
                <ul class="sb-sub-nav">
                    <li><a href="customers.php"><span class="initials">AN</span>Add new</a></li>
                    <li><a href="customers.php"><span class="initials">EC</span>Edit Customer</a></li>
                    <li><a href="customers.php"><span class="initials">VA</span>View All</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user-md" aria-hidden="true"></i>USERS
                </a>
                <ul class="sb-sub-nav">
                    <li><a href="users.php"><span class="initials">AN</span>Add new</a></li>
                    <li><a href="users.php"><span class="initials">EU</span>Edit User</a></li>
                    <li><a href="users.php"><span class="initials">VA</span>View All</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>REPORTS
                </a>
                <ul class="sb-sub-nav">
                    <li><a href="report.php"><span class="initials">TR</span>Today Report</a></li>
                    <li><a href="report.php"><span class="initials">WR</span>Weekly Report</a></li>
                    <li><a href="report.php"><span class="initials">MR</span>Monthly Report</a></li>
                </ul>
            </li>
        </ul>
    </div>
</sidebar>
<div class="box footer-box">
    <footer class="footer clearfix">
        <div class="row">
            <ul class="list-inline footer-links">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Contact Us</a></li>
            </ul>
            <div class="credits">
                Created with <i class="fa fa-heart" aria-hidden="true"></i> by Ansar Gondal.
            </div>
        </div>
    </footer>
</div>

<!--View Message Modal-->
<div class="modal" id="view-message-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Message Details</h2>
                <button class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control readonly" id="name" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Eamil</label>
                            <input type="text" readonly class="form-control" id="email" name="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-control" readonly></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn js-view-btn-reply btn-primary">Reply</button>
                <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!--!View Message Modal-->


<!--Reply Message Modal-->
<div class="modal" id="reply-message-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>REPLY MESSAGE</h2>
                <button class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="to">To</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea name="message" autofocus id="message" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn js-main-btn-reply btn-primary">REPLY <i class="fa fa-spinner hide_spinner"
                                                                           aria-hidden="true"></i></button>
                <button class="btn btn-close" data-dismiss="modal">CANCEL</button>
            </div>
        </div>
    </div>
</div>
<!--!Reply Message Modal-->

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
                    <button class="btn btn-save bg-danger" id="js-btn-delete" type="submit">DELETE <i
                                class="fa fa-spinner hide_spinner" aria-hidden="true"></i></button>
                    <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--!delete modal-->

<!--Message Modal-->
<div class="modal" id="message-modal">
    <circle cx="60" cy="60" r="40"/>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <a href="#" data-dismiss="modal" class="close">&times;</a>
                <div class="success">
                    <figure>
                        <svg version="1.1" id="check-svg" xmlns="http://www.w3.org/2000/svg"
                             x="0px" y="0px"
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
<!--!Message Modal-->

<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--<script src="../vendor/bootstrap-table/dist/bootstrap-table.js"></script>-->
<script src="../js/global.js"></script>
<script src="../js/messages.js"></script>

</body>
</html>