<?php
require('config.php');
include("session.php");
?>

<?php include_once "views/partials/header.php"; ?>

<body>
    <section class="bg-theme">
        <?php include_once "views/partials/customer-navbar.php"; ?>
        <?php include_once "views/partials/menu.php"; ?>

        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><span>Home</span></a></li>
                <li class="breadcrumb-item"><a href="#"><span>Over The Counter Medicine</span></a></li>
                <li class="breadcrumb-item"><a href="#"><span>Supplements</span></a></li>
                <li class="breadcrumb-item"><a href="#"><span>Electrolyte Supplements</span></a></li>
                <li class="breadcrumb-item"><a href="#"><span>Rhea Sodium Chloride</span></a></li>
            </ol>
            <div class="d-flex justify-content-between mt-3">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center bg-white shadow p-3 mb-5 bg-body rounded"><img class="img-fluid product-img" src="assets/img/sodium-chloride.jpg"></div>
                </div>
                <div class="col-md-6">
                    <div class="card prod-card shadow p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                            <h3 class="card-title mt-2 mb-3 fw-bold prod-title">Rhea Sodium Chloride 1 G</h3>
                            <h3 class="fw-bold mb-2">₱ 7.70<br></h3>
                            <h5 class="text-muted mb-4 prod-availability">Availability :&nbsp;
                                <span class="text-color fs-5 fw-bold">&nbsp;In Stock</span>
                            </h5>
                            <p class="card-text text-muted fw-bold mb-2">Dosage Strength : 1 G</p>
                            <p class="mb-2">Brand Name :
                                <span class="fw-bold">&nbsp;Rhea Sodium Chloride</span>
                            </p>
                            <p class="mb-2">Generic Name :
                                <span class="fw-bold">&nbsp;Sodium Chloride</span>
                            </p>
                            <p class="mb-2">Dosage Form :
                                <span class="fw-bold">&nbsp;Tablet</span>
                            </p>
                            <p class="mb-2">Drug Administration :
                                <span class="fw-bold">&nbsp;Oral</span>
                            </p>
                            <p class="mb-2">Manufacturer :
                                <span class="fw-bold">&nbsp;Amherst Laboratories Inc.</span>
                            </p>
                            <p class="mb-2">Category :
                                <span class="fw-bold">&nbsp;Electrolyte Supplement</span>
                            </p>
                            <p class="mb-5">Condition :
                                <span class="fw-bold">&nbsp;Dehydration</span>
                            </p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary product-btn-add rounded-pill" type="button">ADD</button>
                                <a class="d-flex justify-content-center align-items-center btn btn-primary product-btn-buy rounded-pill" href="cart.html">BUY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/daterange.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alumuko/vanilla-datetimerange-picker@latest/dist/vanilla-datetimerange-picker.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>