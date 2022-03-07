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
                <li class="breadcrumb-item"><a href="#"><span>All Products</span></a></li>
            </ol>
            <div class="d-flex justify-content-between">
                <?php include_once "views/partials/sort.php"; ?>
                <div class="col-md-9">
                    <form class="d-lg-flex justify-content-lg-between search-form products-menu rounded"><span class="d-flex align-items-center fw-bold ms-3">All Products</span>
                        <div class="d-flex align-items-center search-prod-bar border col-5 rounded-pill"><input class="form-control" type="search" id="search-product"><label class="form-label d-flex mb-0" for="search-product"><button class="btn btn-primary btn-search-prod rounded-pill" type="button"><i class="fa fa-search icon-color"></i></button></label></div>
                    </form>

                    <?php
                        $sql = "SELECT * FROM product LEFT JOIN manufacturer ON product.ProductID = manufacturer.ManufacturerID;";
                        $result = $con->query($sql) or die(mysql_error());
                
                        while($row = $result->fetch_assoc()){
                                if($row['ProductID'] % 3 == 1){ ?>
                                    <div class="card-group card-products">
                                <?php }            
                                if($row['ProductID'] % 3 == 0){ ?>
                                    <div class="card card-product-end rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/product-img/<?php echo $row['ProductID']; ?>.jpeg">
                                <?php }else{ ?>
                                    <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/product-img/<?php echo $row['ProductID']; ?>.jpeg">
                                <?php }
                             ?>
                            
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="product.php"><?php echo $row['BrandName'].' '.$row['DosageStrength']?></a>
                                <p class="product-brand"><?php echo $row['ManufacturerName']?></p>
                                <p class="sale-price">₱ <?php echo $row['Price']?></p>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary btn-buy rounded-pill">BUY</button>
                                    <button class="btn btn-primary btn-add rounded-pill" id = "rhea" type="button" onClick="addCounter()">ADD</button>

                                    <div id="counter" class="d-none align-items-center">
                                        <a class="quantity-minus" href="#">
                                            <span>-</span>
                                        </a>
                                        <input type="text" class="quantity-input" name="quantity" value="1">
                                        <a class="quantity-plus" href="#">
                                            <span>+</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <?php if($row['ProductID'] % 3 == 0){?> </div> <?php } ?>      
                            <?php }
                     ?>
                </div>
            </div>
        </div>
    </section>

    <script>

        function addCounter() {
            document.querySelector('#rhea').style.display = "none";
            document.querySelector('#counter').classList.remove('d-none');
            document.querySelector('#counter').style.display = "flex";
        }
    </script>

<?php include_once "views/partials/footer.php"; ?>