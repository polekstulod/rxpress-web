<?php
require('config.php');
include("session.php");
?>

<?php include_once "views/partials/header.php"; ?>


<body>
    <section class="bg-theme">
        <?php include_once "views/partials/admin-navbar.php"; ?>
        <?php include_once "views/partials/menu.php"; ?>
        <div class="container">
            <div class="d-flex justify-content-end align-items-baseline mt-5">
                <p class="me-2">Order Creation Date&nbsp;</p>
                <div class="d-inline-flex justify-content-end">
                    <div class="input-group-prepend">
                        <label class="form-label input-group-calendar mb-0" for="datetimerange">
                            <i class="far fa-calendar-alt"></i>
                        </label>
                    </div>
                </div>
                <input type="text" id="datetimerange" class="text-start" size="25">
                <button class="btn btn-primary ms-2 reset-btn" type="button">Reset</button>
            </div>
            <?php 
                $search = $_GET['search-order'] ?? '';
                if ($search) {
                    $sql = "SELECT * FROM orderdetails WHERE OrderID LIKE '%$search%' || OrderDate LIKE '%$search%' || Username LIKE '%$search%' || Subtotal LIKE '%$search%'" ;
                }
                else {
                    $sql = "SELECT * FROM orderdetails";
                }
                $orders = $con->query($sql) or die ($con->error);
                $row = $orders->fetch_assoc();
            ?>
            <div class="d-flex justify-content-between search-orders border mt-2 mb-5">
                <form class="d-inline-flex">
                    <select class="btn-select" id="filter-orders">
                        <option value="order-id" selected>Order ID</option>
                        <option value="username">Username</option>
                        <option value="total-price">Total Price</option>
                    </select>
                    <input class="ms-2" type="search" placeholder="Search..." name="search-order" id="search-order" value="<?php echo $search?>">
                    <label class="form-label d-flex ms-4 mb-0" for="search-order">
                        <button class="btn btn-primary btn-search-prod rounded-pill" type="button">
                            <i class="fa fa-search icon-color"></i>
                        </button>
                    </label>
                </form>
            </div>

            <h4>Orders</h4>
            <div class="table-responsive">
                <table class="table orders-table mb-5">
                    <thead class="orders-header">
                        <tr>
                            <th class="text-center">Order ID</th>
                            <th class="text-center">Order Date</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            do { ?>
                                <tr>
                                    <td class="text-center"><?php echo $row['OrderID']?></td>
                                    <td class="text-center"><?php echo $row['OrderDate']?></td>
                                    <td class="text-center"><?php echo $row['Username']?></td>
                                    <td class="text-end"><?php echo $row['Total']?></td>
                                </tr>

                        <?php  } while ($row = $orders->fetch_assoc());
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

<?php include_once "views/partials/footer.php"; ?>