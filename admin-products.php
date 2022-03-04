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
                    </div><a class="nav-link text-body font-weight-bold px-0" href="orders.php"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="me-sm-1 icon-color orders-icon">
                            <path d="M9 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V7C19 5.89543 18.1046 5 17 5H15M9 5C9 6.10457 9.89543 7 11 7H13C14.1046 7 15 6.10457 15 5M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5M12 12H15M12 16H15M9 12H9.01M9 16H9.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg><span class="d-sm-inline d-none text-color">Orders</span></a>
                    <div class="d-flex justify-content-center"><button class="btn btn-primary rounded-pill add-product" type="button" data-bs-toggle="modal" data-bs-target="#formModal"><i class="fas fa-capsules"></i></button><div id="formModal" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product</h4><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
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
            </nav>
        </div>
        <div class="bg-menu">
            <div class="container d-flex justify-content-between mt-1 mb-1"><a class="text-white small" href="admin-products.html">MEDICINES</a><a class="text-white small" href="#">MEDICAL SUPPLIES</a><a class="text-white small" href="#">PERSONAL CARE</a><a class="text-white small" href="#">PROTECTION &amp; HYGIENE</a><a class="text-white small" href="#">MOM &amp; BABY</a><a class="text-white small" href="#">OFFERS</a><a class="text-white small" href="#">COVID ESSENTIAL</a></div>
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
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck1">Allergies</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Cardiovascular System</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Digestive System</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-4"><label class="form-check-label" for="formCheck-4">Endocrine</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5"><label class="form-check-label" for="formCheck-5">Eye, Ear, Nose, Throat</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-6"><label class="form-check-label" for="formCheck-6">Genito-urinary System</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-7"><label class="form-check-label" for="formCheck-7">Infection &amp; Infestation</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-8"><label class="form-check-label" for="formCheck-8">Integumentary System</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-9"><label class="form-check-label" for="formCheck-9">Musculoskeletal</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-10"><label class="form-check-label" for="formCheck-10">Nervous System</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-11"><label class="form-check-label" for="formCheck-11">Nutrition</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-12"><label class="form-check-label" for="formCheck-12">Respiratory System</label></div>
                            </div>
                            <h6 class="card-subtitle mt-2 sort-color">Sort by Manufacturer</h6>
                            <div class="filter-border">
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-13"><label class="form-check-label" for="formCheck-13">All Brand</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-14"><label class="form-check-label" for="formCheck-14">International Pharmaceuticals Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-15"><label class="form-check-label" for="formCheck-15">Ambica International Corp.</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-16"><label class="form-check-label" for="formCheck-16">Surien Pharmaceuticals Ltd.</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-17"><label class="form-check-label" for="formCheck-17">Philusa Corp</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-18"><label class="form-check-label" for="formCheck-18">Pharmatechnica Laboratory Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-19"><label class="form-check-label" for="formCheck-19">Lumar Pharmaceutical Laboratory Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-20"><label class="form-check-label" for="formCheck-20">CSPC Pharmaceuticals Ltd.</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-21"><label class="form-check-label" for="formCheck-21">Diamond Laboratories Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-22"><label class="form-check-label" for="formCheck-22">New Myrex Laboratories Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-23"><label class="form-check-label" for="formCheck-23">Square Pharmaceuticals Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-24"><label class="form-check-label" for="formCheck-24">Sapphire Lifesciences Pvt Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-25"><label class="form-check-label" for="formCheck-25">Azarias Pharmaceutical Laboratories Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-26"><label class="form-check-label" for="formCheck-26">Zee Laboratories Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-27"><label class="form-check-label" for="formCheck-27">Pil Pharmaceuticals Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-28"><label class="form-check-label" for="formCheck-28">Lloyd Laboratories Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-29"><label class="form-check-label" for="formCheck-29">Drugmaker's Laboratories Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-30"><label class="form-check-label" for="formCheck-30">Helvina Pharmaceuticals Pvt Ltd</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-31"><label class="form-check-label" for="formCheck-3`">JM Tolmann Laboratories, Inc.</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-32"><label class="form-check-label" for="formCheck-32">Allied Pharmaceutical Laboratories Inc</label></div>
                                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-33"><label class="form-check-label" for="formCheck-33">Aristopharma Ltd</label></div>
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
                                <hr><a class="card-link product-link" href="edit-product.html">RHEA SODIUM CHLORIDE 1 G</a>
                                <p class="product-brand">Amherst Laboratories Inc.</p>
                                <p class="sale-price">₱ 7.70</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="edit-product.php">VIEW</a></div>
                            </div>
                        </div>
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto card-image" src="assets/img/xtracee-plus.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">XTRACEE PLUS 562.54 MG</a>
                                <p class="product-brand">Azarias Pharmaceutical Laborat...</p>
                                <p class="d-inline-flex sale-price">₱ 8.25</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="#">VIEW</a></div>
                            </div>
                        </div>
                        <div class="card card-product-end rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/urisol.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">URISOL 100 MG</a>
                                <p class="product-brand">Am-Europharma Corp.</p>
                                <p class="d-inline-flex sale-price">₱ 4.40</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="#">VIEW</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-group card-products">
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/dynatussin.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">DYNATUSSIN 1 MG/15MG/50 MG..</a>
                                <p class="product-brand">Crisdy-Na</p>
                                <p class="d-inline-flex sale-price">₱ 14.30</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="#">VIEW</a></div>
                            </div>
                        </div>
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/atorsaph.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">ATORSAPH 10 MG</a>
                                <p class="product-brand">Sapphire Lifesciences Pvt Ltd</p>
                                <p class="sale-price">₱ 3.96</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="#">VIEW</a></div>
                            </div>
                        </div>
                        <div class="card card-product-end rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/virlix.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">VIRLIX 10MG</a>
                                <p class="product-brand">GlaxoSmithKline</p>
                                <p class="sale-price">₱ 32.73</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="#">VIEW</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-group card-products">
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/mediplast.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">MEDIPLAST</a>
                                <p class="product-brand">Amherst Laboratories Inc.</p>
                                <p class="sale-price">₱ 7.70</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="#">VIEW</a></div>
                            </div>
                        </div>
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/centramed-azithromycin.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">CENTRAMED AZITHROMYCIN 50..</a>
                                <p class="product-brand">Centurion Laboratories Pvt Ltd</p>
                                <p class="sale-price">₱ 99.00</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="#">VIEW</a></div>
                            </div>
                        </div>
                        <div class="card card-product-end rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/betacard.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">BETACARD 6.25 MG</a>
                                <p class="product-brand">Lloyd Laboratories Inc.</p>
                                <p class="sale-price">₱ 11.00</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="#">VIEW</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-group card-products">
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/thydin.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">THYDIN 100MCG</a>
                                <p class="product-brand">Sydenham Laboratories Inc.</p>
                                <p class="sale-price">₱ 15.95</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="#">VIEW</a></div>
                            </div>
                        </div>
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/alnix.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">ALNIX 10 MG</a>
                                <p class="product-brand">Unilab Inc.</p>
                                <p class="sale-price">₱ 38.50</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="#">VIEW</a></div>
                            </div>
                        </div>
                        <div class="card card-product-end rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/ectrin.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">ECTRIN 300 MG</a>
                                <p class="product-brand">Hizon Laboratories Inc.</p>
                                <p class="sale-price">₱ 30.80</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="#">VIEW</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-group card-products">
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/medicol-advance.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">MEDICOL ADVANCE 400MG</a>
                                <p class="product-brand">Amherst Laboratories Inc.</p>
                                <p class="sale-price">₱ 12.10</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="#">VIEW</a></div>
                            </div>
                        </div>
                        <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/forti-d.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">FORTI-D 800 IU</a>
                                <p class="product-brand">Softgel Healthcare Pvt Ltd</p>
                                <p class="sale-price">₱ 8.80</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="#">VIEW</a></div>
                            </div>
                        </div>
                        <div class="card card-product-end rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/nasatapp.jpg">
                            <div class="card-body">
                                <hr><a class="card-link product-link" href="#">NASATAPP 15MG/12 MG</a>
                                <p class="product-brand">Lloyd Laboratories Inc.</p>
                                <p class="sale-price">₱ 9.90</p>
                                <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="#">VIEW</a></div>
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