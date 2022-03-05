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
                <li class="breadcrumb-item"><a href="#"><span>Cart</span></a></li>
            </ol>
            <div class="d-flex justify-content-between">
                <div class="col-md-8">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h4 class="fw-bold mt-2 mb-0">MY CART</h4>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div class="col-md-2 d-flex justify-content-center align-items-md-center"><img class="img-fluid medicine-img" src="assets/img/sodium-chloride.jpg"></div>
                                <div class="col-md-7">
                                    <div class="mt-3">
                                        <p class="mb-0 fw-bold medicine-name">RHEA SODIUM CHLORIDE 1 G</p>
                                        <p class="mb-0 medicine-form">Medicine Form :&nbsp;<span class="fw-bold">Tablet</span></p>
                                        <p class="availability">In Stock</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mt-3 text-end">
                                        <p class="fw-bold">₱ 7.70</p>
                                        <div class="justify-content-end quantity">
                                            <i class="fa fa-trash me-3"></i>
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
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div class="col-md-2 d-flex justify-content-center align-items-md-center"><img class="img-fluid medicine-img" src="assets/img/urisol.jpg"></div>
                                <div class="col-md-7">
                                    <div class="mt-3">
                                        <p class="mb-0 fw-bold medicine-name">URISOL 100MG</p>
                                        <p class="mb-0 medicine-form">Medicine Form :&nbsp;<span class="fw-bold">Tablet</span></p>
                                        <p class="availability">In Stock</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mt-3 text-end">
                                        <p class="fw-bold">₱ 4.00</p>
                                        <div class="justify-content-end quantity"><i class="fa fa-trash me-3"></i><a class="quantity-minus" href="#"><span>-</span></a><input type="text" class="quantity-input" name="quantity" value="1"><a class="quantity-plus" href="#"><span>+</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div class="col-md-2 d-flex justify-content-center align-items-md-center"><img class="img-fluid medicine-img" src="assets/img/dynatussin.jpg"></div>
                                <div class="col-md-7">
                                    <div class="mt-3">
                                        <p class="mb-0 fw-bold medicine-name">DYNATUSSIN 1 MG/15 MG/50 MG/325 MG/30 MG</p>
                                        <p class="mb-0 medicine-form">Medicine Form :&nbsp;<span class="fw-bold">Capsule</span></p>
                                        <p class="availability">In Stock</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mt-3 text-end">
                                        <p class="fw-bold">₱ 14.30</p>
                                        <div class="justify-content-end quantity"><i class="fa fa-trash me-3"></i><a class="quantity-minus" href="#"><span>-</span></a><input type="text" class="quantity-input" name="quantity" value="1"><a class="quantity-plus" href="#"><span>+</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div class="col-md-2 d-flex justify-content-center align-items-md-center"><img class="img-fluid medicine-img" src="assets/img/atorsaph.jpg"></div>
                                <div class="col-md-7">
                                    <div class="mt-3">
                                        <p class="mb-0 fw-bold medicine-name">ATORSAPH 10 MG</p>
                                        <p class="mb-0 medicine-form">Medicine Form :&nbsp;<span class="fw-bold">Tablet</span></p>
                                        <p class="availability">In Stock</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mt-3 text-end">
                                        <p class="fw-bold">₱ 3.96</p>
                                        <div class="justify-content-end quantity"><i class="fa fa-trash me-3"></i><a class="quantity-minus" href="#"><span>-</span></a><input type="text" class="quantity-input" name="quantity" value="1"><a class="quantity-plus" href="#"><span>+</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div class="col-md-2 d-flex justify-content-center align-items-md-center"><img class="img-fluid medicine-img" src="assets/img/alnix.jpg"></div>
                                <div class="col-md-7">
                                    <div class="mt-3">
                                        <p class="mb-0 fw-bold medicine-name">ALNIX 10 MG</p>
                                        <p class="mb-0 medicine-form">Medicine Form :&nbsp;<span class="fw-bold">Tablet</span></p>
                                        <p class="availability">In Stock</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mt-3 text-end">
                                        <p class="fw-bold">₱ 38.50</p>
                                        <div class="justify-content-end quantity"><i class="fa fa-trash me-3"></i><a class="quantity-minus" href="#"><span>-</span></a><input type="text" class="quantity-input" name="quantity" value="1"><a class="quantity-plus" href="#"><span>+</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <div class="col-md-2 d-flex justify-content-center align-items-md-center"><img class="img-fluid medicine-img" src="assets/img/kremil-s.jpg"></div>
                                <div class="col-md-7">
                                    <div class="mt-3">
                                        <p class="mb-0 fw-bold medicine-name">KREMIL-S ADVANCE 10 MG/800 MG/165 MG</p>
                                        <p class="mb-0 medicine-form">Medicine Form :&nbsp;<span class="fw-bold">Chewable Tablet</span></p>
                                        <p class="availability">In Stock</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mt-3 text-end">
                                        <p class="fw-bold">₱ 24.20</p>
                                        <div class="justify-content-end quantity"><i class="fa fa-trash me-3"></i><a class="quantity-minus" href="#"><span>-</span></a><input type="text" class="quantity-input" name="quantity" value="1"><a class="quantity-plus" href="#"><span>+</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group ms-5">
                        <li class="list-group-item">
                            <h5 class="fw-bold mt-2">Summary</h5>
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">Product Total:</p>
                                <p class="mt-1 mb-0">₱ 7.70</p>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <p class="mb-0">Total:</p>
                                <p class="mt-1 mb-0">₱ 7.70</p>
                            </div>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12"><a class="d-flex justify-content-center btn checkout-btn mt-4 ms-5" href="#">Continue Checkout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once "views/partials/header.php"; ?>