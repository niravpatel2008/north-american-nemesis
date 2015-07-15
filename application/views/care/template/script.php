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