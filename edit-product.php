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
                            <h5 class="text-muted mb-4 prod-availability">Availability :&nbsp;<span class="text-color fs-5 fw-bold">&nbsp;In Stock</span></h5>
                            <p class="card-text text-muted fw-bold mb-2">Dosage Strength : 1 G</p>
                            <p class="mb-2">Brand Name :<span class="fw-bold">&nbsp;Rhea Sodium Chloride</span></p>
                            <p class="mb-2">Generic Name :<span class="fw-bold">&nbsp;Sodium Chloride</span></p>
                            <p class="mb-2">Dosage Form :<span class="fw-bold">&nbsp;Tablet</span></p>
                            <p class="mb-2">Drug Administration :<span class="fw-bold">&nbsp;Oral</span></p>
                            <p class="mb-2">Manufacturer :<span class="fw-bold">&nbsp;Amherst Laboratories Inc.</span></p>
                            <p class="mb-2">Category :<span class="fw-bold">&nbsp;Electrolyte Supplement</span></p>
                            <p class="mb-5">Condition :<span class="fw-bold">&nbsp;Dehydration</span></p>
                            <div class="d-flex justify-content-center"><button class="btn btn-primary product-btn-edit rounded-pill" type="button" data-bs-toggle="modal" data-bs-target="#formModal">EDIT</button><div id="formModal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Product</h4><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                      <label for="product-img" class="form-label">Product Image:</label>
                      <input class="form-control" type="file" id="product-img">
                    </div>
                    <div class="mb-3">
                        <label for="brand-name" class="col-form-label">Brand Name:</label>
                        <input type="text" class="form-control" id="brand-name">
                    </div>
                    <div class="mb-3">
                        <label for="generic-name" class="col-form-label">Generic Name:</label>
                        <input type="text" class="form-control" id="generic-name">
                    </div>
                    <div class="mb-3">
                        <label for="dosage-strength" class="col-form-label">Dosage Strength:</label>
                        <input type="text" class="form-control" id="dosage-strength">
                    </div>
                    <div class="mb-3">
                        <label for="dosage-form" class="col-form-label">Dosage Form:</label>
                        <input type="text" class="form-control" id="dosage-form">
                    </div>
                    <div class="mb-3">
                        <label for="drug-administration" class="col-form-label">Drug Administration:</label>
                        <input type="text" class="form-control" id="drug-administration">
                    </div>
                    <div class="mb-3">
                        <label for="stock-quantity" class="col-form-label">Stock Quantity:</label>
                        <input type="text" class="form-control" id="stock-quantity">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="col-form-label">Price:</label>
                        <input type="text" class="form-control" id="price">
                    </div>
                    <div class="mb-3">
                        <label for="inputGroupSelect01" class="col-form-label">Manufacturer Name:</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected></option>
                            <option value="1">International Pharmaceuticals Inc.</option>
                            <option value="2">Ambica International Corp.</option>
                            <option value="3">Surien Pharmaceuticals Ltd.</option>
                            <option value="4">Philusa Corp</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputGroupSelect01" class="col-form-label">Category Name:</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected></option>
                            <option value="1">Allergies</option>
                            <option value="2">Cardiovascular System</option>
                            <option value="3">Digestive System</option>
                            <option value="4">Endocrine</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputGroupSelect01" class="col-form-label">Condition Name:</label>
                        <select class="form-select" id="inputGroupSelect01">
                            <option selected></option>
                            <option value="1">Allergic Rhinitis</option>
                            <option value="2">Anaphylaxis</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
        </div>
    </div>
</div></div>
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