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
            <?php
                $productID = $_GET['title'];
                $sql = "SELECT * FROM product WHERE ProductID = $productID;";
                $result = $con->query($sql) or die(mysql_error());

                while($row = $result->fetch_assoc()) { ?>
                    <div class="col-md-6">
                    <div class="d-flex justify-content-center bg-white shadow p-3 mb-5 bg-body rounded"><img class="img-fluid product-img" src="assets/img/product-img/<?php echo $row['ProductID']; ?>.jpeg"></div>
                </div>
                <div class="col-md-6">
                    <div class="card prod-card shadow p-3 mb-5 bg-body rounded">
                        <div class="card-body">
                            <h3 class="card-title mt-2 mb-3 fw-bold prod-title"><?php echo $row['BrandName']?></h3>
                            <h3 class="fw-bold mb-2">₱ <?php echo $row['Price']?><br></h3>
                            <h5 class="text-muted mb-4 prod-availability">Availability :&nbsp;
                                <span class="text-color fs-5 fw-bold">&nbsp;
                                    <?php
                                        if($row['in_stock'] == 1){
                                            echo "In Stock";
                                        }else{
                                            echo "Out of Stock";
                                        }
                                    ?>
                                    </span>
                            </h5>
                            <p class="card-text text-muted fw-bold mb-2">Dosage Strength : <?php echo $row['DosageStrength']?></p>
                            <p class="mb-2">Brand Name :
                                <span class="fw-bold">&nbsp;<?php echo $row['BrandName']?></span>
                            </p>
                            <p class="mb-2">Generic Name :
                                <span class="fw-bold">&nbsp;<?php echo $row['GenericName']?></span>
                            </p>
                            <p class="mb-2">Dosage Form :
                                <span class="fw-bold">&nbsp;<?php echo $row['DosageForm']?></span>
                            </p>
                            <p class="mb-2">Drug Administration :
                                <span class="fw-bold">&nbsp;<?php echo $row['DrugAdministration']?></span>
                            </p>
                            <p class="mb-2">Manufacturer :
                                <span class="fw-bold">&nbsp;<?php echo $row['ManufacturerID']?></span>
                            </p>
                            <p class="mb-2">Category :
                                <span class="fw-bold">&nbsp;<?php echo $row['CategoryID']?></span>
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
                <?php
                }
                ?>
            </div>
        </div>
    </section>

<?php include_once "views/partials/footer.php"; ?>