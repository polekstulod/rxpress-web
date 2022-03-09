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
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-primary product-btn-edit rounded-pill" type="button" data-bs-toggle="modal" data-bs-target="#editProductModal">EDIT</button>
                                <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="AddProduct" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content bg-modal">
                                            <div class="row p-5">
                                                <div class="col-md mb-md-0 mb-5">
                                                    <div class="modal-body p-0">
                                                        <div class="d-flex align-items-center mb-4">
                                                            <h3 class="me-3">Edit Product</h3>
                                                            <img class="img-fluid" src="assets/img/add-product.png" width="55" height="55" class="rounded-circle">
                                                        </div>
                                                        <form action="add-product.php" class="add-product-form" method="POST" enctype="multipart/form-data">
                                                            <div class="form-group custom-file-button">
                                                                <label for="productImage" class="label-modal">Product Image</label>
                                                                <input type="file" class="form-control modal-form" name="productImage" id="productImage">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="brandName" class="label-modal">Brand Name</label>
                                                                <input type="text" class="form-control modal-form" name="brandName" id="brandName" placeholder="Pearly-C">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="genericName" class="label-modal">Generic Name</label>
                                                                <input type="text" class="form-control modal-form" name="genericName" id="genericName" placeholder="Ascorbic Acid + Zinc">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="dosageStrength" class="label-modal">Dosage Strength</label>
                                                                <input type="text" class="form-control modal-form" name="dosageStrength" id="dosageStrength" placeholder="500 MG / 10 MG">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="dosageForm" class="label-modal">Dosage Form</label>
                                                                <input type="text" class="form-control modal-form" name="dosageForm" id="dosageForm" placeholder="Capsule">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="drugAdministration" class="label-modal">Drug Administration</label>
                                                                <input type="text" class="form-control modal-form" name="drugAdministration" id="drugAdministration" placeholder="Oral route">
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="modal-body p-0" style="margin-top: 5rem;">
                                                        <div class="form-group">
                                                            <label for="stockQuantity" class="label-modal">Stock Quantity</label>
                                                            <input type="number" class="form-control modal-form" name="stockQuantity" id="stockQuantity" placeholder="60">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="price" class="label-modal">Price</label>
                                                            <input type="number" class="form-control modal-form" name="price" id="price" placeholder="6.88">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="manufacturerName" class="label-modal">Manufacturer Name</label>
                                                            <select class="form-select modal-form" name="manufacturerName" id="manufacturerName" placeholder="Jiangxi Xierkangtai Pharmaceutical Co Ltd">
                                                                <option value="" disabled selected></option>
                                                                <?php
                                                                $sql = "SELECT * FROM manufacturer;";
                                                                $result = $con->query($sql) or die(mysql_error());

                                                                while ($row = $result->fetch_assoc()) { ?>
                                                                    <option value="<?php echo $row['ManufacturerID'] ?>"><?php echo $row['ManufacturerName'] ?></option>
                                                                <?php }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="category" class="label-modal">Category Name</label>
                                                            <select class="form-select modal-form" name="category" id="category">
                                                                <option value="" disabled selected></option>
                                                                <option selected></option>
                                                                <?php
                                                                $sql = "SELECT * FROM category;";
                                                                $result = $con->query($sql) or die(mysql_error());

                                                                while ($row = $result->fetch_assoc()) { ?>
                                                                    <option value="<?php echo $row['CategoryID'] ?>"><?php echo $row['CategoryName'] ?></option>
                                                                <?php }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="condition" class="label-modal">Condition Name</label>
                                                            <select class="form-select modal-form" name="condition" id="condition">
                                                                <option value="" disabled selected></option>
                                                                <?php
                                                                $sql = "SELECT * FROM cond;";
                                                                $result = $con->query($sql) or die(mysql_error());

                                                                while ($row = $result->fetch_assoc()) { ?>
                                                                    <option value="<?php echo $row['ConditionID'] ?>"><?php echo $row['ConditionName'] ?></option>
                                                                <?php }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="d-flex justify-content-end" style="margin-top: 6rem;">
                                                            <div class="form-group me-3">
                                                                <button type="button" class="form-control btn btn-cancel rounded submit px-3" data-bs-dismiss="modal">Cancel</button>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" name="submit" class="form-control btn btn-save rounded px-3">Save</button>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once "views/partials/footer.php"; ?>