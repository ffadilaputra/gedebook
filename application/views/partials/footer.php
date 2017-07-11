		<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
		<script src="<?php echo base_url('semantic/dist/semantic.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/datatable/jquery.dataTables.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/datatable/dataTables.semanticui.min.js') ?>"></script>

		<script type="text/javascript">
			$(function(){
				$('select.dropdown').dropdown();
  				$("#logout").click(function(){
  					$('.ui.basic.modal').modal('show');
				});
				$('.ui.card .image').dimmer({
  					on: 'hover'
				});

				$('#daeba').DataTable();

			});

		</script>
</body>
</html>