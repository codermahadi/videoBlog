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
                    <div class="col-12">
                        <div class="card shadow mt-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped" id="dataTable" width="100%"
                                           cellspacing="0">
                                        <thead class="text-center text-light bg-info">
                                        <tr>
                                            <th>Sl</th>
                                            <th>Full name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Password</th>
                                            <th>Address</th>
                                            <th>Gender</th>
                                            <th>Status</th>
                                            <th>Photo</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $results = $con->getUserData("users");
                                        $i = 1;
                                        foreach ($results as $result) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo str_replace('_',' ',$result['full_name']) ?></td>
                                                <td><?php echo $result['username'] ?></td>
                                                <td><?php echo $result['email'] ?></td>
                                                <td><?php echo $result['phone'] ?></td>
                                                <td><?php echo $result['password'] ?></td>
                                                <td><?php echo $result['address'] ?></td>
                                                <td><?php echo ($result['gender'] == 1) ? 'Male' : 'Fe-male' ?></td>
                                                <td><?php echo ($result['status'] == 1) ? 'Active' : 'De-Active' ?></td>
                                                <td><img src="<?php echo $result['photo']?>" alt="No image" style="width:50px;height:50px"></td>
                                                <td>
                                                    <a href="user_Update.php?id=<?php echo $result['id'] ?>"><i
                                                                class="far fa-edit"></i></a>
                                                    <a href="catDelete.php" class="text-danger"><i
                                                                class="fas fa-trash"></i></a>
                                                    <a href="user_single_view.php?id=<?php echo $result['id'] ?>" class="text-info"><i
                                                                class="fas fa-eye"></i></a>
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
        <!-- End of Footer -->
