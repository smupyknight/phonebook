<div class="container py-3" style="overflow: auto">
	<a class="btn btn-primary pull-right" href="create"> Create </a>
	<table id="datatable" class="display" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Name</th>
				<th>Phone Number</th>
				<th>Date of Adding</th>
				<th>Additional Notes</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
		<?php foreach ($list as $item): ?>
			<tr>
				<td><?php echo htmlspecialchars($item->name, ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?php echo htmlspecialchars($item->phone_number, ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?php echo htmlspecialchars($item->date_of_adding, ENT_QUOTES, 'UTF-8'); ?></td>
				<td><?php echo htmlspecialchars($item->additional_notes, ENT_QUOTES, 'UTF-8'); ?></td>
				<td>
					<a href="<?php echo base_url(); ?>update/<?php echo $item->id; ?>"> Update </a>
					<a href="<?php echo base_url(); ?>delete/<?php echo $item->id; ?>"> Delete </a>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>
