<div class="register-wrapper">
	<h1><?php echo lang('create_user_heading'); ?></h1>
	<p><?php echo lang('create_user_subheading'); ?></p>

	<div id="infoMessage"><?php echo $message; ?></div>

	<?php echo form_open("auth/create_user", array('class' => 'register-form', 'id' => 'register-form'));?>
		<div class="form-group">
			<?php echo lang('create_user_fname_label', 'first_name'); ?>
			<?php echo form_input($first_name); ?>
		</div>

		<div class="form-group">
			<?php echo lang('create_user_lname_label', 'last_name'); ?>
			<?php echo form_input($last_name); ?>
		</div>

		<div class="form-group">
			<?php echo lang('create_user_email_label', 'email'); ?>
			<?php echo form_input($email); ?>
		</div>

		<div class="form-group">
			<?php echo lang('create_user_password_label', 'password'); ?>
			<?php echo form_input($password); ?>
		</div>

		<div class="form-group">
			<?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?>
			<?php echo form_input($password_confirm); ?>
		</div>

		<div class="form-group">
			<?php echo form_submit('submit', lang('create_user_submit_btn'), array('class' => 'btn btn-primary mt-3')); ?>
		</div>

		<div class="form-group">
			Already got account? Go to <a href="login">Log In</a>
		</div>
	<?php echo form_close(); ?>
</div>
