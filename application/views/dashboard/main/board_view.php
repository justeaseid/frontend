<!DOCTYPE html>

<html>
    <head>
        <script src="<?php echo DIST_JS; ?>/google/google-analytics.js"></script>
        <?php $this->load->view('content/component/metatag'); ?>

        <?php $this->load->view('dashboard/linkrel/rel_header'); ?>
        <?php $this->load->view('content/linkrel/rel_header'); ?>

    </head>
    <body class="hold-transition skin-red layout-top-nav">
        <?php $this->load->view('content/component/gtm_frame'); ?>
        <div class="wrapper">
            <!--</header>-->
            <?php $this->load->view('layout/header/navbar_dashboard'); ?>
            <!-- Left side column. contains the logo and sidebar -->

            <!-- wrapper content -->
            <div class="content-wrapper">
                <!-- warapper content -->
                <section class="content" style="margin-top: 60px;">
                    <!-- Main row -->
                    <div class="row">
                        <!-- load area chart in large mode -->
                        <?php $this->load->view('dashboard/profile/profile_view'); ?>
                        <?php $this->load->view('dashboard/tables/tables_donasi'); ?>
                    </div>
                </section>
            </div>
            <!-- load footer view -->
            <?php $this->load->view('layout/footer/footer'); ?>
        </div>
        <!-- ./wrapper -->
        <?php $this->load->view('dashboard/linkrel/rel_footer'); ?>
    </body>
</html>
