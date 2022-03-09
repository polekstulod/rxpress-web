<?php

function listProducts($con)
{
    $sql = "SELECT * FROM product INNER JOIN manufacturer ON product.ManufacturerID = manufacturer.ManufacturerID;";
    $result = $con->query($sql) or die(mysql_error());

    while ($row = $result->fetch_assoc()) {
        if ($row['ProductID'] % 3 == 1) { ?>
            <div class="card-group card-products">
            <?php }
        if ($row['ProductID'] % 3 == 0) { ?>
                <div class="card card-product-end rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/product-img/<?php echo $row['ProductID']; ?>.jpeg">
                <?php } else { ?>
                    <div class="card card-product rounded-3"><img class="img-fluid card-img-top w-100 d-block d-inline-block mx-auto" src="assets/img/product-img/<?php echo $row['ProductID']; ?>.jpeg">
                    <?php }
                    ?>

                    <div class="card-body">
                        <hr><a class="card-link product-link" href="<?php
                                                                    $url = '';
                                                                    if ($_SESSION['username'] == 'admin') {
                                                                        $url = 'edit-product.php';
                                                                    } else {
                                                                        $url = 'product.php';
                                                                    }
                                                                    echo $url.'?title='. $row['ProductID'];
                                                                    ?>"><?php echo $row['BrandName'] . ' ' . $row['DosageStrength'] ?></a>
                        <p class="product-brand"><?php echo $row['ManufacturerName'] ?></p>
                        <p class="sale-price">₱ <?php echo $row['Price'] ?></p>
                        <?php
                        if ($_SESSION['username'] == 'admin') { ?>
                            <div class="d-flex justify-content-center"><a class="btn btn-primary btn-view rounded-pill ms-1 me-1" href="edit-product.php">VIEW</a>
                            </div>
                        <?php } else { ?>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary btn-buy rounded-pill">BUY</button>
                                <button class="btn btn-primary btn-add rounded-pill" id="rhea" type="button" onClick="addCounter()">ADD</button>

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
                        <?php }
                        ?>

                    </div>
                    </div>
                    <?php if ($row['ProductID'] % 3 == 0) { ?>
                </div> <?php } ?>
    <?php }
}

    ?>
    <script>
        function addCounter() {
            document.querySelector('#rhea').style.display = "none";
            document.querySelector('#counter').classList.remove('d-none');
            document.querySelector('#counter').style.display = "flex";
        }
    </script>