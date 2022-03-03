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
    <section>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Rxpress Sign-Up</h5>
                    </div>
                    <div class="modal-body">
                        Registered Successfully!
                    </div>
                    <div class="modal-footer">
                        <form action="index.php">
                            <input type="submit" class="btn btn-primary" value="Continue" />
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-slider">
            <div class="row">
                <div class="col-md-4 frost">
                    <div class="toplayer login-card-body">
                        <div class="col-3 mb-2 mx-auto text-center"><img class="img-fluid rxpress-logo" src="assets/img/logo.png" alt="RxPress Logo"></div>
                        <h2 class="text-center rxpress-color fw-bold">RxPress</h2>
                        <div class="pt-0 pe-5 pb-5 ps-5">
                            <form class="form" method="post" name="signup">
                                <div class="mt-4">
                                    <div class="row mb-2">
                                        <div class="col-md-6"><label class="form-label col-sm-12 col-form-label rxpress-color fs-5" for="first-name">First Name</label><input class="form-control border-form rounded-pill" type="text" id="first-name" name="firstname" required></div>
                                        <div class="col-md-6"><label class="form-label col-sm-12 col-form-label rxpress-color fs-5" for="last-name">Last Name</label><input class="form-control border-form rounded-pill" type="text" id="last-name" name="lastname" required></div>
                                    </div>
                                </div>
                                <div class="col mb-2"><label class="form-label col-sm-12 col-form-label rxpress-color fs-5" for="username">Username</label><input class="form-control border-form rounded-pill" type="text" id="username" name="username" required></div>
                                <div class="col mb-2"><label class="form-label col-sm-12 col-form-label rxpress-color fs-5" for="password-1">Password</label><input class="form-control border-form rounded-pill" type="password" id="password-1" name="password" required></div>
                                <div class="col mb-5"><label class="form-label col-sm-12 col-form-label rxpress-color fs-5" for="password-2">Confirm Password</label><input class="form-control border-form rounded-pill" type="password" id="password-2" required></div>
                                <div class="col mb-2"><input class="col-12 btn btn-color rounded-pill fs-5" name="submit" type="submit" value="SIGN UP"></div>
                                <div class="col text-center mb-5"><a class="text-dark text-decoration-none" href="login.php">ALREADY HAVE AN ACCOUNT? LOGIN</a></div>
                            </form>
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
    <script>
        var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    </script>
    <?php
    require('config.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);

        $firstname = stripslashes($_REQUEST['firstname']);
        $firstname = mysqli_real_escape_string($con, $firstname);

        $lastname = stripslashes($_REQUEST['lastname']);
        $lastname = mysqli_real_escape_string($con, $lastname);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);



        $query    = "INSERT into `customer` (`CustomerID`, `Username`, `FirstName`, `LastName`, `User_pw`) VALUES ('', '$username', '$firstname', '$lastname', '$password')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<script>myModal.show()</script>";
        }
    } else {
    }
    ?>
</body>

</html>