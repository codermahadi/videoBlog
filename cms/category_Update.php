<?php
include 'inc/header.php';
?>



<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include 'inc/Sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php include 'inc/top_bar.php'; ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?php $helper->getTitle(); ?></h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>

                <hr/>
                <div class="row">
                    <div class="col-5 offset-3">

                        <?php
                        if (isset($_REQUEST['update'])) {
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
                                <div class="alert alert-success"><?php echo $con->updateCategory($_POST); ?>
                                    <button type="button" class="close" data-dismiss="alert"><span
                                                aria-hidden="true">×</span></button>
                                </div>


                            <?php } else { ?>
                                <div class="alert alert-danger">Request Method Invalid!</div>
                            <?php }
                        }
                        if ($_REQUEST['id']) {
                        $id = $_REQUEST['id'];
                        $results = $con->getUserDataByid('categories', $id);
                        foreach ($results

                        as $result) {
                        ?>

                        <form class="user" action="" method="POST">
                            <input type="text" name="id" value="<?php echo $result['id'] ?>" hidden>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control"
                                           value="<?php echo str_replace("_", " ", $result['name']) ?>" name="category"
                                           id="exampleFirstName"
                                           placeholder="Enter Category Name">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <select class="form-control" name="status" id="">
                                        <option value="<?php echo $result['status']; ?>"><?php echo ($result['status'] == 1) ? 'Active' : 'De-Active' ?></option>
                                        <option value="1">Active</option>
                                        <option value="0">De-Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <input type="submit" class="btn bg-gradient-primary text-light btn-user" name="update"
                                           value="Category Updateed"/>
                                </div>
                                <div class="col-sm-4">
                                    <a href="add_Category.php" class="btn bg-gradient-info text-light btn-user" >Go Back</a>
                                </div>
                            </div>
                            <?php }
                            } ?>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php include 'inc/footer.php'; ?>
        <!-- End of Footer -->

