<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../vendor/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!--    <link rel="stylesheet" href="../vendor/bootstrap-table/dist/bootstrap-table.min.css">-->
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
<div class="box header-box">
    <header class="header">
        <nav class="navbar navbar-light navbar-expand">
            <a href="#" class="navbar-brand js-sb-toggle">
                <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
            </a>
            <span class="page-title">Inventory</span>
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

<main class="main" id="inventory">
    <div class="c-container">
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <ul class="sales-summary">
                            <li><i class="fa fa-line-chart" aria-hidden="true"></i>
                                <h2>TODAY SALES</h2></li>
                            <li><span>Items Sold</span> <span>453</span></li>
                            <li><span>Total Sale</span><span>20,000</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="card w-100">
                    <div class="card-body">
                        <ul class="sales-summary">
                            <li><i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                                <h2>OUT OF STOCK</h2></li>
                            <li><span>OOS ITEMS</span> <span class="oos-item">453</span></li>
                            <li><span>ATE Items</span><span class="ate-item">10</span></li>
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
        <div class="row">
            <div class="col-md-12">
                <table class="table" data-toggle="table" data-pagination="true" data-search="true">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Sales Man</th>
                        <th class="text-center">QTY</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Discount</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>01</td>
                        <td>Panadol</td>
                        <td>Ali Hamza</td>
                        <td class="text-center">30</td>
                        <td class="text-center">44</td>
                        <td class="text-center">oct 09, 2018</td>
                        <td class="text-center">3,000</td>
                        <td class="actions text-center">
                            <a href="#" class="action  js-btn-edit-inventory" data-toggle="tooltip"
                               data-placement="top"
                               title="Edit">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="#" data-id="1" class="action js-btn-delete" data-toggle="tooltip"
                               data-placement="top"
                               title="Delete">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Panadol</td>
                        <td>Ali Hamza</td>
                        <td class="text-center">30</td>
                        <td class="text-center">44</td>
                        <td class="text-center">oct 09, 2018</td>
                        <td class="text-center">3,000</td>
                        <td class="actions text-center">
                            <a href="#" class="action  js-btn-edit-inventory" data-toggle="tooltip"
                               data-placement="top"
                               title="Edit">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="#" data-id="1" class="action js-btn-delete" data-toggle="tooltip"
                               data-placement="top"
                               title="Delete">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Panadol</td>
                        <td>Ali Hamza</td>
                        <td class="text-center">30</td>
                        <td class="text-center">44</td>
                        <td class="text-center">oct 09, 2018</td>
                        <td class="text-center">3,000</td>
                        <td class="actions text-center">
                            <a href="#" class="action  js-btn-edit-inventory" data-toggle="tooltip"
                               data-placement="top"
                               title="Edit">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="#" data-id="1" class="action js-btn-delete" data-toggle="tooltip"
                               data-placement="top"
                               title="Delete">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>04</td>
                        <td>Panadol</td>
                        <td>Ali Hamza</td>
                        <td class="text-center">30</td>
                        <td class="text-center">44</td>
                        <td class="text-center">oct 09, 2018</td>
                        <td class="text-center">3,000</td>
                        <td class="actions text-center">
                            <a href="#" class="action  js-btn-edit-inventory" data-toggle="tooltip"
                               data-placement="top"
                               title="Edit">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="#" data-id="1" class="action js-btn-delete" data-toggle="tooltip"
                               data-placement="top"
                               title="Delete">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>05</td>
                        <td>Panadol</td>
                        <td>Ali Hamza</td>
                        <td class="text-center">30</td>
                        <td class="text-center">44</td>
                        <td class="text-center">oct 09, 2018</td>
                        <td class="text-center">3,000</td>
                        <td class="actions text-center">
                            <a href="#" class="action  js-btn-edit-inventory" data-toggle="tooltip"
                               data-placement="top"
                               title="Edit">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            <a href="#" data-id="1" class="action js-btn-delete" data-toggle="tooltip"
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

<!--new inventory modal-->
<div class="modal fade new-modal" id="new-inventory-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>NEW INVENTORY</h2>
                <button class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="customer-name">Customer Name</label>
                                        <input type="text" class="form-control" id="customer-name"
                                               name="customer_name" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="referred-by">Referred By</label>
                                        <input type="text" class="form-control" id="referred-by" name="referred_by">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone-number">Phone Number</label>
                                        <input type="text" class="form-control" id="phone-number" name="phone_number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="today-date">Date</label>
                                        <input type="text" class="form-control datepicker" id="today-date"
                                               name="today_date">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="note">Note</label>
                                        <input type="text" class="form-control" id="note" name="note">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="row pt-3">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="product-id">Product ID</label>
                                        <input type="text" class="form-control" id="product-id"
                                               name="product_id">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="product">Product</label>
                                        <input type="text" class="form-control" id="product" name="product">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control" id="price" name="price">
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="qty">QTY</label>
                                        <input type="text" class="form-control" id="qty" name="qty">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="discount">Discount</label>
                                        <input type="text" class="form-control" id="discount" name="discount">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="total">Total</label>
                                        <input type="text" class="form-control" id="total" name="total">
                                    </div>
                                </div>
                                <div class="col-md-1 ml-4">
                                    <div class="form-group">
                                        <button class="btn  btn-primary btn-add js-btn-sub-add">ADD <i
                                                    class="fa fa-spinner hide_spinner"
                                                    aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div><!--!row-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table products-table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Batch No</th>
                                    <th>Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">QTY</th>
                                    <th class="text-center">Discount</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>01</td>
                                    <td class="batch">FF3D78</td>
                                    <td class="product">Panadol</td>
                                    <td class="text-center price">30</td>
                                    <td class="text-center qty">3</td>
                                    <td class="text-center discount">10</td>
                                    <td class="text-center total">80</td>
                                    <td class="actions text-center">
                                        <a href="#" class="action js-sub-btn-edit" data-toggle="tooltip"
                                           data-placement="top" title="Edit">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="action js-btn-delete" data-id="1" data-toggle="tooltip"
                                           data-placement="top" title="Delete">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-8 offset-sm-6">
                            <div class="calculations">
                                <ul>
                                    <li>
                                        <span class="sales-text">Sub Total</span>
                                        <span class="sales-amount">2,000</span>
                                    </li>
                                    <li>
                                        <span class="sales-text">Discount</span>
                                        <span class="sales-amount">400</span>
                                    </li>
                                    <li class="sales-total">
                                        <span class="sales-text">Total</span>
                                        <span class="sales-amount"> 2,000</span>
                                    </li>
                                </ul>
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
<!--!new inventory modal-->


<!--edit inventory modal-->
<div class="modal fade" id="edit-inventory-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>EDIT INVENTORY</h2>
                <button class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-customer-name">Customer Name</label>
                                        <input type="text" class="form-control" id="e-customer-name"
                                               name="customer_name" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-referred-by">Referred By</label>
                                        <input type="text" class="form-control" id="e-referred-by" name="referred_by">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-phone-number">Phone Number</label>
                                        <input type="text" class="form-control" id="e-phone-number" name="phone_number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e-today-date">Date</label>
                                        <input type="text" class="form-control datepicker" id="e-today-date"
                                               name="today_date">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="e-note">Note</label>
                                        <input type="text" class="form-control" id="e-note" name="note">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="row pt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="e-product-id">Product ID</label>
                                        <input type="text" class="form-control" id="e-product-id"
                                               name="product_id">
                                    </div>
                                </div>
                                <div class="col-md-2 offset-md-1">
                                    <div class="form-group">
                                        <label for="qty">QTY</label>
                                        <input type="text" class="form-control" id="qty" name="qty">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="discount">Discount</label>
                                        <input type="text" class="form-control" id="discount" name="discount">
                                    </div>
                                </div>
                                <div class="col-md-2 offset-md-1 offset-4 text-right">
                                    <div class="form-group">
                                        <button class="btn  btn-primary btn-add">ADD <i
                                                    class="fa fa-spinner hide_spinner"
                                                    aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div><!--!row-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table products-table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Batch No</th>
                                    <th>Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">QTY</th>
                                    <th class="text-center">Discount</th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>FF3D78</td>
                                    <td>Panadol</td>
                                    <td class="text-center">30</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">10</td>
                                    <td class="text-center">80</td>
                                    <td class="actions text-center">
                                        <a href="#" class="action" data-toggle="tooltip"
                                           data-placement="top"
                                           title="Edit"><i class="fa fa-edit " aria-hidden="true"></i></a>
                                        <a href="#" class="action" data-toggle="tooltip" data-placement="top"
                                           title="Delete"><i class="fa fa-times"
                                                             aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>FF3D78</td>
                                    <td>Panadol</td>
                                    <td class="text-center">30</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">10</td>
                                    <td class="text-center">80</td>
                                    <td class="actions text-center">
                                        <a href="#" class="action" data-toggle="tooltip" data-placement="top"
                                           title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a href="#" class="action" data-toggle="tooltip" data-placement="top"
                                           title="Delete"><i class="fa fa-times"
                                                             aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>03</td>
                                    <td>FF3D78</td>
                                    <td>Panadol</td>
                                    <td class="text-center">30</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">10</td>
                                    <td class="text-center">80</td>
                                    <td class="actions text-center">
                                        <a href="#" class="action" data-toggle="tooltip" data-placement="top"
                                           title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a href="#" class="action" data-toggle="tooltip" data-placement="top"
                                           title="Delete"><i class="fa fa-times"
                                                             aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>04</td>
                                    <td>FF3D78</td>
                                    <td>Panadol</td>
                                    <td class="text-center">30</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">10</td>
                                    <td class="text-center">80</td>
                                    <td class="actions text-center">
                                        <a href="#" class="action" data-toggle="tooltip" data-placement="top"
                                           title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a href="#" class="action" data-toggle="tooltip" data-placement="top"
                                           title="Delete"><i class="fa fa-times"
                                                             aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>05</td>
                                    <td>FF3D78</td>
                                    <td>Panadol</td>
                                    <td class="text-center">30</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">10</td>
                                    <td class="text-center">80</td>
                                    <td class="actions text-center">
                                        <a href="#" class="action" data-toggle="tooltip" data-placement="top"
                                           title="Edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a href="#" class="action" data-toggle="tooltip" data-placement="top"
                                           title="Delete"><i class="fa fa-times"
                                                             aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-8 offset-sm-6">
                            <div class="calculations">
                                <ul>
                                    <li>
                                        <span class="sales-text">Sub Total</span>
                                        <span class="sales-amount">2,000</span>
                                    </li>
                                    <li>
                                        <span class="sales-text">Discount</span>
                                        <span class="sales-amount">400</span>
                                    </li>
                                    <li class="sales-total">
                                        <span class="sales-text">Total</span>
                                        <span class="sales-amount"> 2,000</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary">UPDATE <i class="fa fa-spinner hide_spinner" aria-hidden="true"></i>
                </button>
                <button class="btn btn-close" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!--!Edit inventory modal-->

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
                    <button class="btn btn-save bg-danger" id="js-btn-delete" type="submit">Delete <i
                                class="fa fa-spinner hide_spinner" aria-hidden="true"></i></button>
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
<script src="../js/inventory.js"></script>

</body>
</html>