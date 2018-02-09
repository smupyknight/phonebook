<div class="d-flex justify-content-center">
	<div id="infoMessage"><?php echo $message; ?></div>

	<?php echo form_open("$type/$id", array('class' => 'data-form', 'id' => 'data-form'));?>
		<div class="form-group">
			<label for="name">Name</label>
			<?php echo form_input($name); ?>
		</div>

		<div class="form-group">
			<label for="phone_number">Phone Number</label>
			<?php echo form_input($phone_number); ?>
		</div>

		<div class="form-group">
			<label for="date_of_adding">Date of Adding</label>
			<?php echo form_input($date_of_adding); ?>
		</div>

		<div class="form-group">
			<label for="additional_notes">Additional Notes</label>
			<?php echo form_textarea($additional_notes); ?>
		</div>

		<div class="form-group">
			<?php echo form_submit('', ucfirst($type), array('class' => 'btn btn-primary mt-3')); ?>
		</div>
	<?php echo form_close(); ?>
</div>
