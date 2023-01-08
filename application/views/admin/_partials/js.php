<!-- Bootstrap -->
<script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('dist/js/adminlte.js') ?>"></script>

<!-- PAGE PLUGINS -->

<!-- SweetAlert2 -->
<script src="<?php echo base_url('plugins/sweetalert2/sweetalert2.min.js')?>"></script>
<!-- Toastr -->
<script src="<?php echo base_url('plugins/toastr/toastr.min.js')?>"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>

<!-- jQuery Mapael -->
<script src="<?php echo base_url('plugins/jquery-mousewheel/jquery.mousewheel.js') ?>"></script>
<script src="<?php echo base_url('plugins/raphael/raphael.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/jquery-mapael/jquery.mapael.min.js') ?>"></script>
<script src="<?php echo base_url('plugins/jquery-mapael/maps/usa_states.min.j') ?>s"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('plugins/chart.js/Chart.min.js') ?>"></script>

<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- Page specific script -->
<script>
  
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

	function logoutConfirm(url){
		$('#btn-logout').attr('href', url);
		$('#logoutModal').modal();
	}

	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}

</script>
