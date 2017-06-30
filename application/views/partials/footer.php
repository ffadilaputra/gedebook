		<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
		<script src="<?php echo base_url('semantic/dist/semantic.min.js') ?>"></script>
		<script type="text/javascript">
			$(function(){
				$('select.dropdown')
  				.dropdown();
  				$("a").click(function(){
  					$('.ui.basic.modal').modal('show');
				});
			});

		</script>
</body>
</html>