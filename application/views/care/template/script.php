<script src="<?=public_path()?>js/jquery.js"></script>
<script>
		var baseurl='<?=base_url()?>';
</script>
<?php 
	if(in_array($this->router->fetch_class(), array("signup","dashboard","index","complaint"))){
		//echo '<script src="'.public_path().'js/jquery.backstretch.min.js"></script>';
		echo '<script src="'.public_path().'js/btvalidationEngine-en.js"></script>';
		
		echo '<script src="'.public_path().'js/btvalidationEngine.js"></script>';
		echo '<script src="'.public_path().'js/common.js"></script>';
		echo '<script src="'.public_path().'js/bootstrap.min.js"></script>';
		echo '<script src="'.public_path().'js/dashboard.js"></script>';
	}
?>

	<script src="<?=public_path()?>js/bootstrap.min.js"></script>
    <script src="<?=public_path()?>js/jquery.isotope.min.js"></script>
    <script src="<?=public_path()?>js/jquery.prettyPhoto.js"></script>
    <script src="<?=public_path()?>js/main.js"></script>
	<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
	<script type="text/javascript">
        function admin_path () {
            return '<?=admin_path()?>';
        }

        function success_msg_box (msg) {
            var html = '<div class="alert alert-success alert-dismissable msg-care-display"> \n\
                            <i class="fa fa-check"></i> \n\
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button> \n\
                            '+msg+' \n\
                        </div>';
            return html;
        }

        function error_msg_box(msg)
        {
            var html = '<div class="alert alert-danger alert-dismissable msg-care-display"> \n\
                            <i class="fa fa-ban"></i> \n\
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button> \n\
                            '+msg+' \n\
                        </div>';
            return html;
        }
    </script>
	<script>
	<?php
		$flash_msg = $this->session->flashdata('flash_arr');
	?>
		<?php if (isset($flash_msg['flash_msg'])) {  
				if($flash_msg['flash_type']=='success')
				{ ?>
					$('#flash_msg').html(success_msg_box('<?php echo $flash_msg['flash_msg'] ?>'));
					 setTimeout(function(){  $( "#flash_msg" ).fadeOut( 500 );},4000);
				<?php }
				else if($flash_msg['flash_type']=='error')
				{?>
					$('#flash_msg').html(error_msg_box('<?php echo $flash_msg['flash_msg'] ?>'));
					 setTimeout(function(){  $( "#flash_msg" ).fadeOut( 500 );},4000);
				<?php }
		 } else { ?>
			$('#flash_msg').html('');
		 <?php } ?>
		
	</script>
	
	<script type="text/javascript">
	$(document).ready(function() {
		$("form").validationEngine();
	});
	</script>