<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>rxpress-main</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alumuko/vanilla-datetimerange-picker@latest/dist/vanilla-datetimerange-picker.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="bg-theme">
        <div>
            <nav class="navbar navbar-light navbar-expand-lg navigation-clean-search">
                <div class="container d-flex justify-content-between"><a class="navbar-brand" href="#"><img class="img-fluid" src="assets/img/RxPress%20Header.png" width="90" height="90"></a>
                    <div class="col-8">
                        <form class="me-auto search-form" target="_self">
                            <div class="d-flex align-items-center search-bar border"><input class="form-control search-field" type="search" id="search-field" name="search"><label class="form-label d-flex mb-0" for="search-field"><button class="btn btn-primary" type="button"><i class="fa fa-search search-icon"></i></button></label></div>
                        </form>
                    </div><a class="nav-link text-body font-weight-bold px-0" href="login.html"><i class="fa fa-user me-sm-1 icon-color"></i><span class="d-sm-inline d-none text-color">Login / Register</span></a><a href="cart.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bag-fill icon-color">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"></path>
                        </svg></a>
                </div>
            </nav>
        </div>
        <div class="bg-menu">
            <div class="container d-flex justify-content-between mt-1 mb-1"><a class="text-white small" href="customer-products.html">ORDER MEDICINE</a><a class="text-white small" href="#">MEDICAL SUPPLIES</a><a class="text-white small" href="#">PERSONAL CARE</a><a class="text-white small" href="#">PROTECTION &amp; HYGIENE</a><a class="text-white small" href="#">MOM &amp; BABY</a><a class="text-white small" href="#">OFFERS</a><a class="text-white small" href="#">COVID ESSENTIAL</a></div>
        </div>
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
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/daterange.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alumuko/vanilla-datetimerange-picker@latest/dist/vanilla-datetimerange-picker.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>