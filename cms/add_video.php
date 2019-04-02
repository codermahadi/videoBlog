<?php
include 'inc/header.php';
?>
<style>
    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 1170px !important;
            margin: 1.75rem auto;
        }
    }

    .modal-dialog {
        max-width: 1170px !important;
        margin: 1.75rem auto;
    }
</style>

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
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <a class="btn btn-info" href="#" data-toggle="modal" data-target="#contentViewModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            View Video
                        </a>
                    </div>
                    <div class="col-4 offset-3">

                        <?php
                        if (isset($_REQUEST['submit'])) {
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?>
                                <div class="alert alert-success"><?php echo $con->addVideo($_POST); ?>
                                    <button type="button" class="close" data-dismiss="alert"><span
                                            aria-hidden="true">×</span></button>
                                </div>
                            <?php } else { ?>
                                <div class="alert alert-danger">Request Method Invalid!</div>
                            <?php }
                        } ?>


                        <form class="user" action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <?php $results = $con->getData("contents"); ?>

                                    <select class="form-control" name="content_id" id="" required>
                                        <option value="">Select Content Title</option>
                                        <?php foreach ($results as $result) { ?>
                                            <option value="<?php echo $result['id']; ?>"><?php echo str_replace("_", " ", $result['title']) ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control" name="video_url" id="exampleFirstName"
                                           placeholder="Video Url" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <select class="form-control" name="status" id="">
                                        <option value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">De-Active</option>
                                    </select>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary btn-user" name="submit" value="Add Video"/>
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


        <div class="modal fade" id="contentViewModal" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="modal-dialog">
                            <div class="card modal-content shadow mb-4">
                                <div class="card-header modal-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped" id="dataTable"
                                               width="100%" cellspacing="0">
                                            <thead class="text-center text-light bg-info">
                                            <tr>
                                                <th>Sl</th>
                                                <th>Content Title</th>
                                                <th>Video Url</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $results = $con->getData("videos");
                                            $i = 1;
                                            //  print_r($getData);   //array show table
                                            foreach ($results as $result) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $i++ ?></td>
                                                    <td><?php echo $result['content_id']?></td>
                                                    <td><?php echo $result['file_path'] ?></td>
                                                    <td><?php echo ($result['status'] == 1) ? 'Active' : 'De-Active' ?></td>
                                                    <td>
                                                        <a href="#"><i
                                                                    class="far fa-edit"></i></a>
                                                        <a href="#" class="text-danger"><i
                                                                    class="fas fa-trash"></i></a>
                                                        <a href="#"
                                                           class="text-info"><i class="fas fa-eye"></i></a>
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
            </div>
            <!-- /.container-fluid -->
        </div>
