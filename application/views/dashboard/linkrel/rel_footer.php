<!-- jQuery 2.1.4 -->
<script src="<?php echo PLUGINS; ?>/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo BOOTSTRAP_JS; ?>/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo PLUGINS; ?>/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo PLUGINS; ?>/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo PLUGINS; ?>/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo PLUGINS; ?>/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo DIST_JS; ?>/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo DIST_JS; ?>/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
    });
</script>

<!-- Select2 -->
<script src="<?php echo PLUGINS; ?>/select2/select2.full.min.js"></script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
    });
</script>