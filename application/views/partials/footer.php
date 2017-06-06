    <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.custom.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.flexslider.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.quicksand.js') ?>"></script>

    <script type="text/javascript">
	    $(document).ready(function () {

	    $("#btn-blog-next").click(function () {
	      $('#blogCarousel').carousel('next')
	    });
	     $("#btn-blog-prev").click(function () {
	      $('#blogCarousel').carousel('prev')
	    });

	     $("#btn-client-next").click(function () {
	      $('#clientCarousel').carousel('next')
	    });
	     $("#btn-client-prev").click(function () {
	      $('#clientCarousel').carousel('prev')
	    });
	    
	});

	 $(window).load(function(){

	    $('.flexslider').flexslider({
	        animation: "slide",
	        slideshow: true,
	        start: function(slider){
	          $('body').removeClass('loading');
	        }
	    });  
	});
    </script>

</body>
</html>