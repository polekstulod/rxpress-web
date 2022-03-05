<?php
require('config.php');
include("session.php");
?>

<?php include_once "views/partials/header.php"; ?>

<body>
    <section class="bg-theme">
        <?php include_once "views/partials/admin-navbar.php"; ?>
        <?php include_once "views/partials/menu.php"; ?>
        <div class="container">
            <div class="d-flex justify-content-end align-items-baseline mt-5">
                <p class="me-2">Order Creation Date&nbsp;</p>
                <div class="d-inline-flex justify-content-end">
                    <div class="input-group-prepend">
                        <label class="form-label input-group-calendar mb-0" for="datetimerange">
                            <i class="far fa-calendar-alt"></i>
                        </label>
                    </div>
                </div>
                <input type="text" id="datetimerange" class="text-start" size="25">
                <button class="btn btn-primary ms-2 reset-btn" type="button">Reset</button>
            </div>
            <div class="d-flex justify-content-between search-orders border mt-2 mb-5">
                <select class="btn-select" id="filter-orders">
                    <option value="order-id" selected>Order ID</option>
                    <option value="username">Username</option>
                    <option value="total-price">Total Price</option>
                </select>
                <input type="search" id="search-order">
                <label class="form-label d-flex mb-0" for="search-product">
                    <button class="btn btn-primary btn-search-prod rounded-pill" type="button">
                        <i class="fa fa-search icon-color"></i>
                    </button>
                </label>
            </div>
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