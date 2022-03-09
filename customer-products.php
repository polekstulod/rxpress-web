<?php
require('config.php');
include("session.php");
include("functions.php");
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
                        listProducts($con);
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