
<?php if ($message) { ?>
<p><?php echo $message; ?></p>
<?php }?>

<table border="1">

	<tr>
<?php foreach($titles as $title) { ?>
		<td><?php echo $title; ?></td>
<?php } ?>
	</tr>
	
<?php foreach($fields as $row) { ?>
	<tr>
<?php 	foreach($row as $field) { ?>
		<td><?php echo $field; ?></td>
<?php 	} ?>
	</tr>
<?php } ?>

</table>

<?php if ($pages_count > 1) { ?>
	<p>
	<?php for($i=1;$i<=$pages_count;$i++) { ?>
		<?php	echo anchor($controller.'/list_all/'.$i, $i); ?>
	<?php } ?>
	</p>
<?php } ?>

<p>
	<?php	echo anchor($controller.'/create', 'Create item'); ?>
</p>