<div class="login-wrapper">
	<h1><?php echo lang('login_heading'); ?></h1>
	<p><?php echo lang('login_subheading'); ?></p>

	<div id="infoMessage"><?php echo $message; ?></div>

	<?php echo form_open(base_url() . "login", array('class' => 'login-form', 'id' => 'login-form'));?>
		<div class="form-group">
			<?php echo lang('login_identity_label', 'identity'); ?>
			<?php echo form_input($identity); ?>
		</div>

		<div class="form-group">
			<?php echo lang('login_password_label', 'password'); ?>
			<?php echo form_input($password); ?>
		</div>

		<div class="form-group">
			<?php echo form_submit('submit', lang('login_submit_btn'), array('class' => 'btn btn-primary mt-3')); ?>
		</div>
	<?php echo form_close(); ?>
</div>
