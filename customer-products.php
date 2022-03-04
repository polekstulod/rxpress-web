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
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
            }

            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
            }

            .dropdown:hover .dropdown-content {
            display: block;
            }
    </style>

</head>

<body>
    <section class="bg-theme">
        <div>
            <nav class="navbar navbar-light navbar-expand-lg navigation-clean-search">
                <div class="container d-flex justify-content-between"><a class="navbar-brand" href="#"><img class="img-fluid" src="assets/img/RxPress%20Header.png" width="90" height="90"></a>
                    <div class="col-7">
                        <form class="me-auto search-form" target="_self">
                            <div class="d-flex align-items-center search-bar border"><input class="form-control search-field" type="search" id="search-field" name="search"><label class="form-label d-flex mb-0" for="search-field"><button class="btn btn-primary" type="button"><i class="fa fa-search search-icon"></i></button></label></div>
                        </form>
                    </div>

                    <div class="dropdown">
                        <span>
                        <img class="img-fluid" src="assets/img/avatar.png" width="40" height="40" class="rounded-circle">
                            <span class="d-sm-inline d-none text-color ms-1">
                                <?php
                                    session_start();
                                    echo $_SESSION['username']; 
                                ?>
                            </span>
                        </span>
                        <div class="dropdown-content">
                            <a href="logout.php">Log out</a>
                        </div>
                    </div>

                    <a href="cart.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bag-fill icon-color">
                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"></path>
                        </svg>
                    </a>
                </div>
            </nav>
        </div>
        <div class="bg-menu">
            <div class="container d-flex justify-content-between mt-1 mb-1"><a class="text-white small" href="customer-products.php">ORDER MEDICINE</a><a class="text-white small" href="#">MEDICAL SUPPLIES</a><a class="text-white small" href="#">PERSONAL CARE</a><a class="text-white small" href="#">PROTECTION &amp; HYGIENE</a><a class="text-white small" href="#">MOM &amp; BABY</a><a class="text-white small" href="#">OFFERS</a><a class="text-white small" href="#">COVID ESSENTIAL</a></div>
        </div>
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><span>Home</span></a></li>
                <li class="breadcrumb-item"><a href="#"><span>All Products</span></a></li>
            </ol>
            <div class="d-flex justify-content-between">
                <div class="col-md-3">
                    <div class="card me-2 rounded-3">
                        <div class="card-body">
                            <h6 class="card-subtitle mt-2 sort-color">Sort by Price</h6>
                            <hr class="mt-2">
                            <p class="card-text text-muted mb-0">₱0 - ₱148773</p>
                            <div class="range-slider"><input class="form-range" type="range" value="5" min="0" max="15" step="0.5"><input class="form-range" type="range" value="10" min="0" max="15" step="0.5"></div>
                            <h6 class="card-subtitle mt-2 sort-color">Sort by Categories</h6>
                            <div class="filter-border">
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-48"><label class="form-check-label" for="formCheck-48">Allergies</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-49"><label class="form-check-label" for="formCheck-49">Cardiovascular System</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-50"><label class="form-check-label" for="formCheck-50">Digestive System</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-51"><label class="form-check-label" for="formCheck-51">Endocrine</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-52"><label class="form-check-label" for="formCheck-52">Eye, Ear, Nose, Throat</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-53"><label class="form-check-label" for="formCheck-53">Genito-urinary System</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-54"><label class="form-check-label" for="formCheck-54">Infection &amp; Infestation</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-55"><label class="form-check-label" for="formCheck-55">Integumentary System</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-56"><label class="form-check-label" for="formCheck-56">Musculoskeletal</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-57"><label class="form-check-label" for="formCheck-57">Nervous System</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-58"><label class="form-check-label" for="formCheck-58">Nutrition</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-59"><label class="form-check-label" for="formCheck-59">Respiratory System</label></div>
                            </div>
                            <h6 class="card-subtitle mt-2 sort-color">Sort by Manufacturer</h6>
                            <div class="filter-border">
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-60"><label class="form-check-label" for="formCheck-60">All Brand</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-61"><label class="form-check-label" for="formCheck-61">International Pharmaceuticals Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-62"><label class="form-check-label" for="formCheck-62">Ambica International Corp.</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-63"><label class="form-check-label" for="formCheck-63">Surien Pharmaceuticals Ltd.</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-64"><label class="form-check-label" for="formCheck-64">Philusa Corp</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-18"><label class="form-check-label" for="formCheck-18">Pharmatechnica Laboratory Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-19"><label class="form-check-label" for="formCheck-19">Lumar Pharmaceutical Laboratory Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-20"><label class="form-check-label" for="formCheck-20">CSPC Pharmaceuticals Ltd.</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-21"><label class="form-check-label" for="formCheck-21">Diamond Laboratories Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-65"><label class="form-check-label" for="formCheck-65">New Myrex Laboratories Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-66"><label class="form-check-label" for="formCheck-66">Square Pharmaceuticals Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-67"><label class="form-check-label" for="formCheck-67">Sapphire Lifesciences Pvt Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-68"><label class="form-check-label" for="formCheck-68">Azarias Pharmaceutical Laboratories Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-69"><label class="form-check-label" for="formCheck-69">Zee Laboratories Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-70"><label class="form-check-label" for="formCheck-70">Pil Pharmaceuticals Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-71"><label class="form-check-label" for="formCheck-71">Lloyd Laboratories Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-72"><label class="form-check-label" for="formCheck-72">Drugmaker's Laboratories Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-73"><label class="form-check-label" for="formCheck-73">Helvina Pharmaceuticals Pvt Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-74"><label class="form-check-label" for="formCheck-74">JM Tolmann Laboratories, Inc.</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-75"><label class="form-check-label" for="formCheck-75">Allied Pharmaceutical Laboratories Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-76"><label class="form-check-label" for="formCheck-76">Aristopharma Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-34"><label class="form-check-label" for="formCheck-34">Prime Pharmaceuticals Pvt Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-35"><label class="form-check-label" for="formCheck-35">BAL Pharma Ltd.</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-36"><label class="form-check-label" for="formCheck-36">Harmann Pharmaceutical Laboratories Pvt Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-37"><label class="form-check-label" for="formCheck-37">Scheele Laboratories Philippines Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-38"><label class="form-check-label" for="formCheck-38">Jiangxi Xierkangtai Pharmaceutical Co Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-39"><label class="form-check-label" for="formCheck-39">Alwin DMD Pharmaceuticals</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-40"><label class="form-check-label" for="formCheck-40">Cycus Pharma Private Ltd.</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-41"><label class="form-check-label" for="formCheck-41">Theon Pharmaceuticals Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-42"><label class="form-check-label" for="formCheck-42">EU Medicaments</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-43"><label class="form-check-label" for="formCheck-43">San Marino Laboratories Corp</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-44"><label class="form-check-label" for="formCheck-44">Scott Edil Pharmacia Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-45"><label class="form-check-label" for="formCheck-45">Am-Europharma Corp.</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-46"><label class="form-check-label" for="formCheck-46">Brawn Laboratories Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-47"><label class="form-check-label" for="formCheck-47">Pell Tech Healthcare Pvt. Ltd.</label></div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <div class="d-flex justify-content-between"><a class="btn btn-primary btn-buy rounded-pill" href="cart.php">BUY</a><button class="btn btn-primary btn-add rounded-pill" type="button">ADD</button></div>
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
        $(document).ready(function() {
            $(".dropdown-toggle").dropdown();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/daterange.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alumuko/vanilla-datetimerange-picker@latest/dist/vanilla-datetimerange-picker.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
</body>

</html>