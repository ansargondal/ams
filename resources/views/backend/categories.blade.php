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
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap-tagsinput.css">
    <!--    <link rel="stylesheet" href="../vendor/bootstrap-table/dist/bootstrap-table.min.css">-->
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Categories</title>
</head>
<body>
<div class="box header-box">
    <header class="header">
        <nav class="navbar navbar-light navbar-expand">
            <a href="#" class="navbar-brand js-sb-toggle">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
            </a>
            <span class="page-title">Categories</span>
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

<main class="main categories" id="categories">
    <div class="c-container">

        <div class="row table-controls">
            <div class="col-md-2 ">
                <div class="form-group float-left">
                    <label for="search">Search</label>
                    <input type="text" class="form-control" id="search">
                </div>
            </div>
            <div class="col-md-2 offset-8">
                <button class="btn btn-primary js-btn-new float-right">NEW <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                <table class="table" id="categories-table" data-toggle="table" data-pagination="true"
                       data-search="true">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th class="text-center">Tags</th>
                        <th class="text-center">Detail</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01</td>
                        <td class="category">Antipyretics</td>
                        <td class="text-center tags">Fever, Temprature</td>
                        <td class="text-center detail">Reducing Fever (pyrexia/pyresis)</td>
                        <td class="actions text-center">
                            <a href="#" class="action js-btn-edit-category" data-toggle="tooltip" data-placement="top"
                               title="Edit">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                               data-placement="top"
                               title="Delete">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td class="category">Antipyretics</td>
                        <td class="text-center tags">Fever, Temprature</td>
                        <td class="text-center detail">Reducing Fever (pyrexia/pyresis)</td>
                        <td class="actions text-center">
                            <a href="#" class="action js-btn-edit-category" data-toggle="tooltip" data-placement="top"
                               title="Edit">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                               data-placement="top"
                               title="Delete">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td class="category">Antipyretics</td>
                        <td class="text-center tags">Fever, Temprature</td>
                        <td class="text-center detail">Reducing Fever (pyrexia/pyresis)</td>
                        <td class="actions text-center">
                            <a href="#" class="action js-btn-edit-category" data-toggle="tooltip" data-placement="top"
                               title="Edit">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                               data-placement="top"
                               title="Delete">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td class="category">Antipyretics</td>
                        <td class="text-center tags">Fever, Temprature</td>
                        <td class="text-center detail">Reducing Fever (pyrexia/pyresis)</td>
                        <td class="actions text-center">
                            <a href="#" class="action js-btn-edit-category" data-toggle="tooltip" data-placement="top"
                               title="Edit">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                               data-placement="top"
                               title="Delete">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td class="category">Antipyretics</td>
                        <td class="text-center tags">Fever, Temprature</td>
                        <td class="text-center detail">Reducing Fever (pyrexia/pyresis)</td>
                        <td class="actions text-center">
                            <a href="#" class="action js-btn-edit-category" data-toggle="tooltip" data-placement="top"
                               title="Edit">
                                <i class="fa fa-edit" aria-hidden="true"></i>
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

<!--New Category Modal-->
<div class="modal fade new-modal" id="new-category-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>New Category</h2>
                <button class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" class="form-control" id="category" autofocus name="category">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <input type="text" class="form-control" id="tags" name="tags" data-role="tagsinput">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <textarea name="detail" id="detail" class="form-control"></textarea>
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
<!--!New Category Modal-->


<!--Edit Category Modal-->
<div class="modal" id="edit-category-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Edit Category</h2>
                <button class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" class="form-control" autofocus id="category" name="category">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <input type="text" class="form-control" id="tags" name="tags" data-role="tagsinput">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="detail">Detail</label>
                            <textarea name="detail" id="detail" class="form-control"></textarea>
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
<!--!Edit Category Modal-->

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
                    <button class="btn  bg-danger" id="js-btn-delete" type="submit">DELETE <i
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
<!--!Message Modal-->

<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap-tagsinput.js"></script>
<!--<script src="../vendor/bootstrap-table/dist/bootstrap-table.js"></script>-->
<script src="../js/global.js"></script>
<script src="../js/categories.js"></script>

</body>
</html>