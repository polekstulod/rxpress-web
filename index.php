<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>RxPress</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/alumuko/vanilla-datetimerange-picker@latest/dist/vanilla-datetimerange-picker.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section>
        <div class="container-fluid bg-slider">
            <div class="row">
                <div class="col-md-4 frost">
                    <div class="toplayer login-card-body">
                        <div class="col-3 mb-2 mx-auto"><img class="img-fluid" src="assets/img/logo.png" alt="RxPress Logo"></div>
                        <h2 class="text-center rxpress-color fw-bold">RxPress</h2>
                        <div class="mt-5 pt-0 pe-5 pb-5 ps-5">
                            <form class="form" method="post" name="login">
                                <div class="col mb-3"><label class="form-label col-sm-12 col-form-label rxpress-color fs-5" for="username">Username</label><input class="form-control border-form rounded-pill" type="text" id="username" name="username" required></div>
                                <div class="col mb-5"><label class="form-label col-sm-12 col-form-label rxpress-color fs-5" for="password">Password</label><input class="form-control border-form rounded-pill" type="password" id="password" name="password" required></div>
                                <div class="col mb-2"><input class="col-12 btn btn-color rounded-pill fs-5" type="submit" name="submit" value="LOGIN"></div>
                                <div class="mt-5 text-center"><a class="text-dark text-decoration-none" href="signup.php">DON'T HAVE AN ACCOUNT? SIGN UP</a></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function errorAlert() {
            Swal.fire({
                icon: 'error',
                title: 'Invalid Login Credentials',
                text: 'Incorrect Username or Password!',
                confirmButtonColor: "#00A3A8",
                })
        }

        function successAlert() {
            Swal.fire({
                title: "Login Successful!",
                text: "You have successfully logged in. Redirecting to the products page ",
                confirmButtonColor: "#00A3A8",
                icon: "success",
            }).then((result) => {
                if (result['isConfirmed']) {
                    window.location.href = "/rxpress-web/customer-products.php";
                }
            })
        }
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/daterange.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alumuko/vanilla-datetimerange-picker@latest/dist/vanilla-datetimerange-picker.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
        require('config.php');
        session_start();
        // When form submitted, check and create user session.
        if (isset($_POST['username'])) {
            $username = stripslashes($_REQUEST['username']);    // removes backslashes
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            // Check user is exist in the database
            $query    = "SELECT * FROM `customer` WHERE Username='$username' AND User_pw='$password'";
            $result = mysqli_query($con, $query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if ($rows) {
                $_SESSION['username'] = $username;
                echo "<script>successAlert()</script>";
            } 
            else {
                echo "<script>errorAlert()</script>";
            }
        }
    ?>
</body>

</html>