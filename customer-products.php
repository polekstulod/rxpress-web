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
                    <div class="card-group card-products">
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/sodium-chloride.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="product.php">RHEA SODIUM CHLORIDE 1 G</a>
                                <p class="product-brand">Amherst Laboratories Inc.</p>
                                <p class="sale-price">₱ 7.70</p>
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
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto card-image" src="assets/img/xtracee-plus.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">XTRACEE PLUS 562.54 MG</a>
                                <p class="product-brand">Azarias Pharmaceutical Laborat...</p>
                                <p class="d-inline-flex sale-price">₱ 8.25</p>
                                <div class="d-flex justify-content-between"><button class="btn btn-primary btn-buy rounded-pill" type="button">BUY</button><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
                            </div>
                        </div>
                        <div class="card card-product-end rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/urisol.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">URISOL 100 MG</a>
                                <p class="product-brand">Am-Europharma Corp.</p>
                                <p class="d-inline-flex sale-price">₱ 4.40</p>
                                <div class="d-flex justify-content-between"><button class="btn btn-primary btn-buy rounded-pill" type="button">BUY</button><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-group card-products">
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/dynatussin.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">DYNATUSSIN 1 MG/15MG/50 MG..</a>
                                <p class="product-brand">Crisdy-Na</p>
                                <p class="d-inline-flex sale-price">₱ 14.30</p>
                                <div class="d-flex justify-content-between"><button class="btn btn-primary btn-buy rounded-pill" type="button">BUY</button><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
                            </div>
                        </div>
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/atorsaph.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">ATORSAPH 10 MG</a>
                                <p class="product-brand">Sapphire Lifesciences Pvt Ltd</p>
                                <p class="sale-price">₱ 3.96</p>
                                <div class="d-flex justify-content-between"><button class="btn btn-primary btn-buy rounded-pill" type="button">BUY</button><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
                            </div>
                        </div>
                        <div class="card card-product-end rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/virlix.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">VIRLIX 10MG</a>
                                <p class="product-brand">GlaxoSmithKline</p>
                                <p class="sale-price">₱ 32.73</p>
                                <div class="d-flex justify-content-between"><button class="btn btn-primary btn-buy rounded-pill" type="button">BUY</button><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-group card-products">
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/mediplast.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">MEDIPLAST</a>
                                <p class="product-brand">Amherst Laboratories Inc.</p>
                                <p class="sale-price">₱ 7.70</p>
                                <div class="d-flex justify-content-between"><button class="btn btn-primary btn-buy rounded-pill" type="button">BUY</button><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
                            </div>
                        </div>
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/centramed-azithromycin.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">CENTRAMED AZITHROMYCIN 50..</a>
                                <p class="product-brand">Centurion Laboratories Pvt Ltd</p>
                                <p class="sale-price">₱ 99.00</p>
                                <div class="d-flex justify-content-between"><button class="btn btn-primary btn-buy rounded-pill" type="button">BUY</button><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
                            </div>
                        </div>
                        <div class="card card-product-end rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/betacard.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">BETACARD 6.25 MG</a>
                                <p class="product-brand">Lloyd Laboratories Inc.</p>
                                <p class="sale-price">₱ 11.00</p>
                                <div class="d-flex justify-content-between"><button class="btn btn-primary btn-buy rounded-pill" type="button">BUY</button><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-group card-products">
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/thydin.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">THYDIN 100MCG</a>
                                <p class="product-brand">Sydenham Laboratories Inc.</p>
                                <p class="sale-price">₱ 15.95</p>
                                <div class="d-flex justify-content-between"><button class="btn btn-primary btn-buy rounded-pill" type="button">BUY</button><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
                            </div>
                        </div>
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/alnix.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">ALNIX 10 MG</a>
                                <p class="product-brand">Unilab Inc.</p>
                                <p class="sale-price">₱ 38.50</p>
                                <div class="d-flex justify-content-between"><button class="btn btn-primary btn-buy rounded-pill" type="button">BUY</button><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
                            </div>
                        </div>
                        <div class="card card-product-end rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/ectrin.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">ECTRIN 300 MG</a>
                                <p class="product-brand">Hizon Laboratories Inc.</p>
                                <p class="sale-price">₱ 30.80</p>
                                <div class="d-flex justify-content-between"><button class="btn btn-primary btn-buy rounded-pill" type="button">BUY</button><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-group card-products">
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/medicol-advance.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">MEDICOL ADVANCE 400MG</a>
                                <p class="product-brand">Amherst Laboratories Inc.</p>
                                <p class="sale-price">₱ 12.10</p>
                                <div class="d-flex justify-content-between"><button class="btn btn-primary btn-buy rounded-pill" type="button">BUY</button><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
                            </div>
                        </div>
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/forti-d.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">FORTI-D 800 IU</a>
                                <p class="product-brand">Softgel Healthcare Pvt Ltd</p>
                                <p class="sale-price">₱ 8.80</p>
                                <div class="d-flex justify-content-between"><button class="btn btn-primary btn-buy rounded-pill" type="button">BUY</button><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
                            </div>
                        </div>
                        <div class="card card-product-end rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/nasatapp.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">NASATAPP 15MG/12 MG</a>
                                <p class="product-brand">Lloyd Laboratories Inc.</p>
                                <p class="sale-price">₱ 9.90</p>
                                <div class="d-flex justify-content-between"><button class="btn btn-primary btn-buy rounded-pill" type="button">BUY</button><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
                            </div>
                        </div>
                    </div>
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