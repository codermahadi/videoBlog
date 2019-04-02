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
                    <div class="col-3">

                        <?php
                        if (isset($_REQUEST['submit'])) {
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
                                <div class="alert alert-success"><?php echo $con->addCategory($_POST); ?>
                                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
                                </div>



                            <?php } else { ?>
                                <div class="alert alert-danger">Request Method Invalid!</div>
                            <?php }
                        } ?>

                        <form class="user" action="" method="POST">
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" required name="category" id="exampleFirstName"
                                           placeholder="Enter Category Name">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <select class="form-control" required name="status" id="">
                                        <option value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">De-Active</option>
                                    </select>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary btn-user" name="submit" value="Add Category"/>
                        </form>
                    </div>
                    <div class="col-9">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="text-center text-light bg-info">
                                        <tr>
                                            <th>Sl</th>
                                            <th>Create By</th>
                                            <th>name</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $results = $con->getData("categories");
                                        $i = 1;
                                        //  print_r($getData);   //array show table
                                        foreach ($results as $result) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $result['user_id'] ?></td>
                                                <td><?php echo str_replace("_", " ", $result['name']) ?></td>
                                                <td class="<?php echo ($result['status'] == 1) ? 'text-info' : 'text-danger' ?>"><?php echo ($result['status'] == 1) ? 'Active' : 'De-Active' ?></td>
                                                <td><?php echo $result['create_at'] ?></td>
                                                <td>
                                                    <a href="category_Update.php?id=<?php echo $result['id']?>"><i class="far fa-edit"></i></a>
                                                    <a href="catDelete.php" class="text-danger"><i class="fas fa-trash"></i></a>
                                                    <a href="view_category.php?id=<?php echo $result['id']?>" class="text-info"><i class="fas fa-eye"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php include 'inc/footer.php'; ?>
