
<?php if ($message) { ?>
<p><?php echo $message; ?></p>
<?php }?>


		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Actives</h3>
		<ul class="tabs">
   			<li><a href="#tab1">2013|2016</a></li>
<!--
    		<li><a href="#tab2">2016</a></li>
-->
		</ul>
		</header>

<div class="tab_container">
	<div id="tab1" class="tab_content">
	<table class="tablesorter" cellspacing="0"> 
	<thead>
	<tr>
<?php foreach($titles as $title) { ?>
		<td><?php echo $title; ?></td>
<?php } ?>
	</tr>
	</thead>
	<tbody>
<?php foreach($fields as $row) { ?>
	<tr>
<?php 	foreach($row as $field) { ?>
		<td><?php echo $field; ?></td>
<?php 	} ?>
	</tr>
<?php } ?>
	</tbody>
</table>
			</div><!-- end of #tab1 -->
			
			<footer>
				<div class="submit_link">
					<?php if ($pages_count > 1) { ?>
						<?php for($i=1;$i<=$pages_count;$i++) {
							echo anchor($controller.'/list_all/'.$i, $i, array('class' => 'table_button'));
							echo '&nbsp;';
							}
						} ?>
				</div>
			</footer>

</article><!-- end of messages article -->
