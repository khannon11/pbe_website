<?php

##Function to display each of the information fields
function show_field($variable, $text){
	if($text == "Email"){
		$append = "@MIT.EDU";
		}
	else { $append = NULL;}	
	
	if ($variable != NULL && $variable != "0000-00-00"){
		echo "<tr> \n <td>$text: $variable$append</td> \n </tr>";
	}
}

	if ($name == NULL){
	
			echo '<div class="brothersListWrapper"><div class="brotherList"><ul>';

			foreach($results as $row){
				$linkName = str_replace(" ", "_", $row->brotherName);
			
			    /*
echo "<li>";
			    echo '<a href="' . base_url().'website/brothers/'.$linkName . '">';
			    echo '<div class="brotherPictureWrapper">';
			    echo '<img src="http://placehold.it/90x90" class="brotherPicture" />';
			    echo '</div>';
				echo '<p class="brotherName">' . $row->brotherName . '</p>';
				echo '</a></li>';
*/



				echo "<a href='".base_url()."website/brothers/".$linkName."'>" . $row->brotherName . "</a>";
				echo "<br />";
				}
				
			echo '</ul>\n</div></div>\n';
		}

	else {

		if($results == NULL){
			echo "NO BROTHER WITH THAT NAME";
		}

		foreach($results as $row){?>
		<a href="<?php echo base_url();?>website/brothers">Back to Brothers</a>

			<br />
			<center><span style="font-weight: bold;font-size:20px;"><?php echo $row->brotherName; ?></span></center>
			<table width="650px" cellspacing="10px" cellpadding="1" border="0" align="center">
				<tr>
					<td width="220px">
						<img src="http://placehold.it/200x300" class="" alt="" />
					</td>
					<td>
						<table width="430px" cellspacing="10px" cellpadding="5" border="0">
						  <?php 
						  	echo show_field($row->brotherPledgeClass, "Pledge Class"); 
						  	echo show_field($row->brotherPledgeNumber, "Pledge Number"); 
						  	echo show_field($row->brotherMajor, "Major"); 
						  	echo show_field($row->brotherBirthday, "Birthday"); 
						  	echo show_field($row->brotherCity, "Hometown"); 
						  	echo show_field($row->brotherEmail, "Email"); 
						  	echo show_field($row->brotherBio, "Biography"); 				  
						  ?>
						</table>
					</td>
				</tr>
			</table>	

<?php		 }

		 } 
?>
