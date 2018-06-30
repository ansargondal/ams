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
    <link rel="stylesheet" href="../vendor/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Products</title>
    <style type="text/css">
        .ui-datepicker {
            max-width: 230px;
            min-width: 230px;
        }
    </style>
</head>
<body>
<div class="box header-box">
    <header class="header">
        <nav class="navbar navbar-light navbar-expand">
            <a href="#" class="navbar-brand js-sb-toggle">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
            </a>
            <span class="page-title">Products</span>
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

<main class="main" id="products">
    <div class="c-container">
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="products-summary">
                            <li><span class="status in-stock"></span></li>
                            <li>IN STOCK</li>
                            <li><span class="divider"></span></li>
                            <li class="total">200</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="products-summary">
                            <li><span class="status short-in-stock"></span></li>
                            <li>SHORT IN STOCK</li>
                            <li><span class="divider"></span></li>
                            <li class="total">100</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="products-summary">
                            <li><span class="status out-of-stock"></span></li>
                            <li>OUT OF STOCK</li>
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
            <div class="col-md-2 offset-8">
                <button class="btn btn-primary js-btn-new float-right">NEW <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <div class="row table-container">
            <div class="col-md-12">
                <table class="table" id="products-table" data-toggle="table" data-search="true" data-pagination="true">
                    <thead>
                    <tr>
                        <th>Batch</th>
                        <th>Product</th>
                        <th class="text-center">QTY</th>
                        <th class="text-center">PP</th>
                        <th class="text-center">SP</th>
                        <th class="text-center">Expiry</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    //                    $products = Product::fetch_all();

                    //                    foreach ($products as $product) :
                    ?>
                    <tr>
                        <td class="batch">PD00FF3</td>
                        <td class="product">Panadol</td>
                        <td class="text-center qty">30</td>
                        <td class="text-center pp">20</td>
                        <td class="text-center sp">23</td>
                        <td class="text-center expiry">oct 09, 2018</td>
                        <td class="text-center">
                            <span class="status out-of-stock"
                                  data-toggle="tooltip" data-placement="top"
                                  title="out of stock"></span>
                        </td>
                        <td class="actions text-center">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"
                               class="action js-btn-edit" data-id="">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="delete"
                               class="action js-btn-delete" data-id="">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="batch">PD00FF3</td>
                        <td class="product">Panadol</td>
                        <td class="text-center qty">30</td>
                        <td class="text-center pp">20</td>
                        <td class="text-center sp">23</td>
                        <td class="text-center expiry">oct 09, 2018</td>
                        <td class="text-center">
                            <span class="status out-of-stock"
                                  data-toggle="tooltip" data-placement="top"
                                  title="out of stock"></span>
                        </td>
                        <td class="actions text-center">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"
                               class="action js-btn-edit" data-id="">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="delete"
                               class="action js-btn-delete" data-id="">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="batch">PD00FF3</td>
                        <td class="product">Panadol</td>
                        <td class="text-center qty">30</td>
                        <td class="text-center pp">20</td>
                        <td class="text-center sp">23</td>
                        <td class="text-center expiry">oct 09, 2018</td>
                        <td class="text-center">
                            <span class="status out-of-stock"
                                  data-toggle="tooltip" data-placement="top"
                                  title="out of stock"></span>
                        </td>
                        <td class="actions text-center">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"
                               class="action js-btn-edit" data-id="">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="delete"
                               class="action js-btn-delete" data-id="">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="batch">PD00FF3</td>
                        <td class="product">Panadol</td>
                        <td class="text-center qty">30</td>
                        <td class="text-center pp">20</td>
                        <td class="text-center sp">23</td>
                        <td class="text-center expiry">oct 09, 2018</td>
                        <td class="text-center">
                            <span class="status out-of-stock"
                                  data-toggle="tooltip" data-placement="top"
                                  title="out of stock"></span>
                        </td>
                        <td class="actions text-center">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Edit"
                               class="action js-btn-edit" data-id="">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="delete"
                               class="action js-btn-delete" data-id="">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <!--                    --><?php //endforeach; ?>
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


<!--edit product modal-->
<div class="modal fade" id="edit-product-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="Classes/routes.php?action=update" method="post">
                <div class="modal-header">
                    <h2>EDIT PRODUCT</h2>
                    <button class="close" data-dismiss="modal"><i class="fa fa-times"
                                                                  aria-hidden="true"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4  order-sm-1 order-md-12">
                            <div class="form-group text-center">
                                <div class="img-fake">
                                    <i class="fa fa-cube" aria-hidden="true"></i>
                                    <img class="img-fluid js-img-choosed" src="../img/face.jpg" alt="product image">
                                </div>
                                <label for="img-chooser">
                                    <span class="btn btn-file btn-primary">Choose Image</span>
                                </label>
                                <input type="file" name="img" id="img-chooser" class="d-none">
                            </div>
                        </div>
                        <div class="col-md-8 order-sm-12 order-md-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-product-name">Product
                                            Name</label>
                                        <input type="text" class="form-control"
                                               id="e-product-name" name="product">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formula">Chemical Formula</label>
                                        <input type="text" class="form-control"
                                               id="formula" name="formula">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-batch-number">Batch
                                            Number</label>
                                        <input type="text" class="form-control"
                                               id="e-batch-number" name="batch">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="cat">Category</label>
                                        <input type="text" class="form-control" id="cat"
                                               name="cat">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#">Antipyretics</a></li>
                                            <li><a href="#">Analgesics</a></li>
                                            <li><a href="#">Antimalarial</a></li>
                                            <li><a href="#">Antibiotics</a></li>
                                            <li><a href="#">Antiseptics</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-expiry">Expiry Date</label>
                                        <input type="text" class="form-control datepicker" id="e-expiry"
                                               name="expiry">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-qty">QTY</label>
                                        <input type="text" class="form-control" id="e-qty"
                                               name="qty">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-pp">Purchase Price</label>
                                        <input type="text" class="form-control" id="e-pp"
                                               name="pp">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-sp">Sales Price</label>
                                        <input type="text" class="form-control" id="e-sp"
                                               name="sp">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary js-btn-update">Update <i class="fa fa-spinner hide_spinner"
                                                                            aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--!edit product modal-->


<!--New product modal-->
<div class="modal fade new-modal" id="new-product-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="Classes/routes.php?action=new" id="new-product-form" method="post">
                <div class="modal-header">
                    <h2>NEW PRODUCT</h2>
                    <button class="close" data-dismiss="modal"><i class="fa fa-times"
                                                                  aria-hidden="true"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4  order-sm-1 order-md-12">
                            <div class="form-group text-center">
                                <div class="img-fake">
                                    <i class="fa fa-cube" aria-hidden="true"></i>
                                    <img class="img-fluid js-img-choosed" src="../img/face.jpg" alt="product image">
                                </div>
                                <label for="img-chooser">
                                    <span class="btn btn-file btn-primary">Choose Image</span>
                                </label>
                                <input type="file" name="img" id="img-chooser" class="d-none">
                            </div>
                        </div>
                        <div class="col-md-8 order-sm-12 order-md-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="product-name">Product
                                            Name</label>
                                        <input type="text" class="form-control"
                                               id="product-name" name="product">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="formula">Chemical Formula</label>
                                        <input type="text" class="form-control"
                                               id="formula" name="formula">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="batch-number">Batch
                                            Number</label>
                                        <input type="text" class="form-control"
                                               id="batch-number" name="batch">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group c-dropdown">
                                        <label for="category">Category</label>
                                        <input type="text" readonly class="form-control" id="category"
                                               name="category">
                                        <ul class="c-dropdown-menu">
                                            <li><a href="#">Antipyretics</a></li>
                                            <li><a href="#">Analgesics</a></li>
                                            <li><a href="#">Antimalarial</a></li>
                                            <li><a href="#">Antibiotics</a></li>
                                            <li><a href="#">Antiseptics</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="expiry">Expiry Date</label>
                                        <input type="text" class="form-control datepicker" id="expiry"
                                               name="expiry">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="qty">QTY</label>
                                        <input type="text" class="form-control" id="qty"
                                               name="qty">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pp">Purchase Price</label>
                                        <input type="text" class="form-control" id="pp"
                                               name="pp">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sp">Sales Price</label>
                                        <input type="text" class="form-control" id="sp"
                                               name="sp">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary js-btn-save">SAVE <i class="fa fa-spinner hide_spinner"
                                                                        aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--!New product modal-->

<!--delete modal-->
<div class="modal" id="delete-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="Classes/routes.php?action=delete" method="post">
                <div class="modal-header">
                    <h6 class="modal-title">CONFIRM DELETE</h6>
                    <a href="#" class="close" data-dismiss="modal">&times</a>
                </div>
                <div class="modal-body">
                    <p>Do you Really want to delete?</p>
                    <input type="text" name="delete_id" id="id" class="d-none">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-save bg-danger" id="js-btn-delete" type="submit">
                        Delete <i class="fa fa-spinner hide_spinner" aria-hidden="true"></i>
                    </button>
                    <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--!delete modal-->

<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--<script src="../vendor/bootstrap-table/dist/bootstrap-table.js"></script>-->
<script src="../js/global.js"></script>
<script src="../js/products.js"></script>

</body>
</html>