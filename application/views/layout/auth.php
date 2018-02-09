<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>PhoneBook</title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>
</head>

<body>
	<div class="full-screen p-5 d-flex align-items-center justify-content-center">
		<!-- start: content -->
		<?php $this->load->view($content); ?>
		<!-- end: content -->
	</div>
</body>
</html>
