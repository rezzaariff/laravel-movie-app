<?php
include 'src/layouts/header.php';
include 'src/layouts/sidebar.php';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ramalan Cuaca</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">BMKG Lite </h2>


                        </div>
                        <div class="card-body" height="1500" width="150">
                            <p>Tau ga persamaan kamu sama cuaca? Sama-sama susah ditebak
                            <img src="src/assets/img/SadCloud.png" alt="Sad Cloud" height="80" width="80">
                            </p>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'src/layouts/footer.php';
?>