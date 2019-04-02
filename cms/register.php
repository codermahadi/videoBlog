<?php
include 'constants/constants.php';
include 'lib/Database.php';
include 'lib/Main.php';

$con = new Main();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="assets/css/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="text-success mb-4">Create an Account!</h1>
                        </div>

                        <?php
                        if (isset($_REQUEST['submit'])) {
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                                $permited = array('jpg', 'jpeg', 'png', 'gif');

                                $file_name = $_FILES['photo']['name'];
                                // $file_size = $_FILES['photo']['size'];
                                $file_temp = $_FILES['photo']['tmp_name'];
                                $div = explode('.', $file_name);
                                $file_ext = strtolower(end($div));
                                if (!in_array($file_ext, $permited)) {
                                    echo "File Extention Invalid";
                                    exit();
                                }
                                $pathname = $con->gen_uuid();
                                $unique_image = $pathname . '.' . $file_ext;
                                $uploaded_image = "assets/img/" . $unique_image;
                                ?>
                                <div class="alert alert-success"><?php echo $con->addUser($_POST, $file_temp, $uploaded_image); ?>
                                    <button type="button" class="close" data-dismiss="alert"><span
                                                aria-hidden="true">×</span></button>
                                </div>
                            <?php } else { ?>
                                <div class="alert alert-danger">Request Method Invalid!</div>
                            <?php }
                        } ?>
                        <form class="user" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="full_name"
                                           id="exampleFirstName" placeholder="Enter Your Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                           name="username" placeholder="username">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="email" class="form-control form-control-user" name="email"
                                           id="exampleInputEmail"
                                           placeholder="Email Address">
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" name="address"
                                           id="exampleInputMobile" placeholder="Address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="tel" class="form-control form-control-user" name="phone"
                                           id="exampleInputMobile" placeholder="Mobile">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                           id="exampleRepeatPassword" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select class="form-control" name="gender" id="">
                                        <option value="">Select Gender</option>
                                        <option value="1">Male</option>
                                        <option value="0">Fe-male</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <select class="form-control" name="status" id="">
                                        <option value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">De-Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="file" class="" name="photo" id="examplephoto">
                                </div>
                            </div>
                            <input type="submit" name="submit" value="Register Account"
                                   class="btn btn-primary btn-user btn-block">
                            <hr>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.php">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="../login.php">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="assets/css/vendor/jquery/jquery.min.js"></script>
<script src="assets/css/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="assets/css/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
