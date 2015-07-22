<div class="footer">
  <div class="footer_bottom">
    <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
    <div class="copy">
      <p>Copyright &copy; 2015 Company Name. Design by <a href="#" rel="nofollow">Ctat Application</a></p>
    </div>
  </div>
</div>
	<script src="<?=public_path()?>js/jquery.js"></script>
	<script type="text/javascript" src="<?=public_path()?>js/responsive-nav.js"></script> 
	<?php  
		if($this->router->fetch_method() == 'signin')
		{
			echo '<link href="'.public_path().'css/validationEngine.css" rel="stylesheet" type="text/css">';
		}
		//if($this->router->fetch_class() == 'signup'){
		if(in_array($this->router->fetch_class(), array("signup","dashboard","index"))){
			echo '<link href="'.public_path().'css/signup.css" rel="stylesheet" type="text/css">';
			echo '<link href="'.public_path().'css/validationEngine.css" rel="stylesheet" type="text/css">';
			
		}
	?>
	
	<script>
			var baseurl='<?=base_url()?>';
	</script>
	<?php 
		if(in_array($this->router->fetch_class(), array("signup","dashboard","index"))){
			//echo '<script src="'.public_path().'js/jquery.backstretch.min.js"></script>';
			echo '<script src="'.public_path().'js/btvalidationEngine-en.js"></script>';
			echo '<script src="'.public_path().'js/btvalidationEngine.js"></script>';
			echo '<script src="'.public_path().'js/common.js"></script>';
		}
	?>
    <script src="<?=public_path()?>js/bootstrap.min.js"></script>
	<script src="<?=public_path()?>js/bootstrap.min.js"></script> 
	<script src="<?=public_path()?>js/jquery.flexslider.js"></script>
	<script type="text/javascript">
        function admin_path () {
            return '<?=admin_path()?>';
        }

        function success_msg_box (msg) {
            var html = '<div class="alert alert-success alert-dismissable msg-display"> \n\
                            <i class="fa fa-check"></i> \n\
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button> \n\
                            '+msg+' \n\
                        </div>';
            return html;
        }

        function error_msg_box(msg)
        {
            var html = '<div class="alert alert-danger alert-dismissable msg-display"> \n\
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
</body>
</html>