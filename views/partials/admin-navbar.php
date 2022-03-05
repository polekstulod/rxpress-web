<div>
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean-search">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="#">
                <img class="img-fluid" src="assets/img/Admin%20Header.png" width="95" height="95">
            </a>
            <div class="col-7">
                <form class="me-auto search-form" target="_self">
                    <div class="d-flex align-items-center search-bar border">
                        <input class="form-control search-field" type="search" id="search-field" name="search">
                        <label class="form-label d-flex mb-0" for="search-field">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search search-icon"></i>
                            </button>
                        </label>
                    </div>
                </form>
            </div>
            <a class="nav-link text-body font-weight-bold px-0" href="orders.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="me-sm-1 icon-color orders-icon">
                    <path d="M9 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V7C19 5.89543 18.1046 5 17 5H15M9 5C9 6.10457 9.89543 7 11 7H13C14.1046 7 15 6.10457 15 5M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5M12 12H15M12 16H15M9 12H9.01M9 16H9.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <span class="d-sm-inline d-none text-color">Orders</span></a>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary rounded-pill add-product" type="button" data-bs-toggle="modal" data-bs-target="#formModal">
                    <i class="fas fa-capsules"></i>
                </button>

                <div id="formModal" class="modal fade" role="dialog" tabindex="-1">
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
                            <div class="modal-footer">
                                <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <span>
                    <img class="img-fluid" src="assets/img/avatar.png" width="40" height="40" class="rounded-circle">
                    <span class="d-sm-inline d-none text-color ms-1">
                        <?php
                        echo $_SESSION['username'];
                        ?>
                    </span>
                </span>
                <div class="dropdown-content">
                    <a href="logout.php">Log out</a>
                </div>
            </div>
        </div>
    </nav>
</div>