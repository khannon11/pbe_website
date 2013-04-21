<?php 
	if ($name == NULL){
		
			foreach($results as $row){
				$linkName = str_replace(" ", "_", $row->brotherName);
		
				echo "<a href='".base_url()."website/brothers/".$linkName."'>" . $row->brotherName . "</a>";
				echo "<br />";
				}
	}

	else {	

		foreach($results as $row){?>
		<a href="<?php echo base_url();?>website/brothers">Back to Brothers</a>

			<br />
		
				<table width="650px" cellspacing="10px" cellpadding="1" border="0" align="center">
				  <tr>
				    <td colspan="2" align="center" style="font-weight: bold;font-size:20px;"><?php echo $row->brotherName; ?></td>
				  </tr>
				  <tr>
				    <td rowspan="8"><img src="http://placehold.it/200x300" class="" alt="" /></td>
				    <td>Pledge Class: <?php echo $row->brotherPledgeClass; ?></td>
				  </tr>
				  <tr>
				    <td>Pledge Number: <?php echo $row->brotherPledgeNumber; ?></td>
				  </tr>
				  <tr>
				    <td>Major: <?php echo $row->brotherMajor; ?></td>
				  </tr>
<!--
				  <tr>
				    <td>Birthday: 04/06/1994</td>
				  </tr>
-->
<!--
				  <tr>
				    <td>Hometown: Buffalo, NY</td>
				  </tr>
-->
				  <tr>
				    <td>Email: <?php echo $row->brotherEmail."@MIT.EDU"; ?></td>
				  </tr>
				  <tr>
				    <td>Bio: <?php echo $row->brotherBio; ?>
				    </td>
				  </tr>
				</table>

		<?php }

 } ?>
