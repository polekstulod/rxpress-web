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
                    </div><a class="nav-link text-body font-weight-bold px-0" href="orders.html"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" class="me-sm-1 icon-color orders-icon">
                            <path d="M9 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V7C19 5.89543 18.1046 5 17 5H15M9 5C9 6.10457 9.89543 7 11 7H13C14.1046 7 15 6.10457 15 5M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5M12 12H15M12 16H15M9 12H9.01M9 16H9.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg><span class="d-sm-inline d-none text-color">Orders</span></a><a href="admin-products.html"><i class="fas fa-capsules icon-color"></i></a>
                </div>
            </nav>
        </div>
        <div class="bg-menu">
            <div class="container d-flex justify-content-between mt-1 mb-1"><a class="text-white small" href="admin-products.html">MEDICINES</a><a class="text-white small" href="#">MEDICAL SUPPLIES</a><a class="text-white small" href="#">PERSONAL CARE</a><a class="text-white small" href="#">PROTECTION &amp; HYGIENE</a><a class="text-white small" href="#">MOM &amp; BABY</a><a class="text-white small" href="#">OFFERS</a><a class="text-white small" href="#">COVID ESSENTIAL</a></div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-end align-items-baseline mt-5">
                <p class="me-2">Order Creation Date&nbsp;</p>
                <div class="d-inline-flex justify-content-end">
                    <div class="input-group-prepend"><label class="form-label input-group-calendar mb-0" for="datetimerange"><i class="far fa-calendar-alt"></i></label></div>
                </div><input type="text" id="datetimerange" class="text-start" size="25"><button class="btn btn-primary ms-2 reset-btn" type="button">Reset</button>
            </div>
            <div class="d-flex justify-content-between search-orders border mt-2 mb-5"><select class="btn-select" id="filter-orders">
    <option value="order-id" selected>Order ID</option>
    <option value="username">Username</option>
    <option value="total-price">Total Price</option>
</select><input type="search" id="search-order"><label class="form-label d-flex mb-0" for="search-product"><button class="btn btn-primary btn-search-prod rounded-pill" type="button"><i class="fa fa-search icon-color"></i></button></label></div>
            <h4>Orders</h4>
            <div class="table-responsive">
                <table class="table orders-table">
                    <thead class="orders-header">
                        <tr>
                            <th class="text-center">Order ID</th>
                            <th class="text-center">Order Date</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">100000000</td>
                            <td class="text-center">2021-12-08</td>
                            <td class="text-center">amerie_vitacion</td>
                            <td class="text-end">₱ 30.25</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000001</td>
                            <td class="text-center">2021-12-10</td>
                            <td class="text-center">jeraldine_bejo</td>
                            <td class="text-end">₱ 120.50</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000002</td>
                            <td class="text-center">2021-12-17</td>
                            <td class="text-center">armi_tolentino</td>
                            <td class="text-end">₱ 7000.00</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000003</td>
                            <td class="text-center">2021-12-19</td>
                            <td class="text-center">eliana_tamana</td>
                            <td class="text-end">₱ 4330.75</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000004</td>
                            <td class="text-center">2021-12-21</td>
                            <td class="text-center">angela_bernando</td>
                            <td class="text-end">₱ 12000.25</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000005</td>
                            <td class="text-center">2022-01-05</td>
                            <td class="text-center">justine_carpio</td>
                            <td class="text-end">₱ 570.50</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000006</td>
                            <td class="text-center">2022-01-12</td>
                            <td class="text-center">joyce_gutierrez</td>
                            <td class="text-end">₱ 800.00</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000007</td>
                            <td class="text-center">2022-01-17</td>
                            <td class="text-center">kath_borromeo</td>
                            <td class="text-end">₱ 12.00</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000008</td>
                            <td class="text-center">2022-01-25</td>
                            <td class="text-center">chelsey_valderama</td>
                            <td class="text-end">₱ 15.75</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000009</td>
                            <td class="text-center">2022-01-27</td>
                            <td class="text-center">kirsten_villamayor</td>
                            <td class="text-end">₱ 289.50</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000010</td>
                            <td class="text-center">2022-02-01</td>
                            <td class="text-center">joyce_biag</td>
                            <td class="text-end">₱ 180.25</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000011</td>
                            <td class="text-center">2022-02-09</td>
                            <td class="text-center">christine_ledesma</td>
                            <td class="text-end">₱ 6.50</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000012</td>
                            <td class="text-center">2022-02-11</td>
                            <td class="text-center">hallie_atanis</td>
                            <td class="text-end">₱ 1000.00</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000013</td>
                            <td class="text-center">2022-02-11</td>
                            <td class="text-center">sam_rodriguez</td>
                            <td class="text-end">₱ 750.75</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000014</td>
                            <td class="text-center">2022-02-11</td>
                            <td class="text-center">kcedrick_balagat</td>
                            <td class="text-end">₱ 950.00</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000015</td>
                            <td class="text-center">2022-02-18</td>
                            <td class="text-center">anne_buenavidez</td>
                            <td class="text-end">₱ 11.00</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000016</td>
                            <td class="text-center">2022-02-22</td>
                            <td class="text-center">dani_dela_cruz</td>
                            <td class="text-end">₱ 67.25</td>
                        </tr>
                        <tr>
                            <td class="text-center">100000017</td>
                            <td class="text-center">2022-02-24</td>
                            <td class="text-center">cloe_alcantara</td>
                            <td class="text-end">₱ 4.75</td>
                        </tr>
                    </tbody>
                </table>
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