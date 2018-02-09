<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>PhoneBook</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/datatables.net-dt/css/jquery.dataTables.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>
</head>

<body>
	<!-- start: header -->
	<?php $this->load->view('common/header'); ?>
	<!-- end: header -->

	<div class="position-relative mt-5">
		<div class="full-screen px-3">
			<!-- start: content -->
			<?php $this->load->view($content); ?>
			<!-- end: content -->
		</div>
	</div>

	<?php $this->load->view('common/footer'); ?>
</body>
</html>
