<?php
//$this->load->view('care/template/header');
//$this->load->view('care/template/middle');
//$this->load->view('care/template/footer');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view('care/template/head');?>
	</head>
	<body class="skin-blue">
		<div class="wrapper">

			<header class="main-header">
				<?php $this->load->view('care/template/header');?>
			</header>
			
			<aside class="main-sidebar">
				<?php $this->load->view('care/template/sidebar');?>
			</aside>

			<div class="content-wrapper" style="min-height: 918px;">
				<?php $this->load->view("care/".$this->router->fetch_class()."/".$view); ?>
			</div>

			<footer class="main-footer">
				<?php $this->load->view('care/template/footer');?>
			</footer>
		</div>
	</body>
		<?php $this->load->view('care/template/script');?>
</html>