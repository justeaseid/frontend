<!DOCTYPE HTML>
<!-- author: justease.id -->
<html lang="id">
    <head>
        <script src="<?php echo DIST_JS; ?>/google/google-analytics.js"></script>
        <?php $this->load->view('content/component/metatag'); ?>
        <?php $this->load->view('content/component/rel_header'); ?>
    </head>
    <body>
        <?php $this->load->view('content/component/gtm_frame'); ?>

        <!-- Navbar -->
        <?php $this->load->view('layout/header/navbar'); ?>
        
        <!-- content case list -->
        <?php $this->load->view('content/campaign/case'); ?>

        <!-- footer section -->
        <?php $this->load->view('layout/footer/footer'); ?>

        <!-- js footer section -->
        <?php $this->load->view('content/component/rel_footer'); ?>
    </body>
</html>
