
<form action="<?php echo base_url().$controller; ?>/save" method="post">

		<article class="module width_3_quarter">

			<header><h3>Brother Information</h3></header>
				<div class="module_content">
					<?php foreach($titles as $key => $title) { ?>
						<fieldset>
							<label><?php echo $title; ?></label>
							<span><?php echo $fields[$key]; ?></span>
						</fieldset>
									<?php } ?>

						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Save">
				</div>
			</footer>
		</article><!-- end of post new article -->

</form>




