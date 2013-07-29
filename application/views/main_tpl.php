<?php 
	$this->load->view('password_protect');	




?>



<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>PBE Admin Panel</title>
	<link rel="stylesheet" href="<?php echo $this->assets->url("/layout.css", "admin");?>" type="text/css" media="screen" />

	<script src="<?php echo $this->assets->url("/jquery-1.5.2.min.js", "admin");?>" type="text/javascript"></script>
	<script src="<?php echo $this->assets->url("/hideshow.js", "admin");?>" type="text/javascript"></script>
	<script src="<?php echo $this->assets->url("/jquery.tablesorter.min.js", "admin");?>" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $this->assets->url("/jquery.equalHeight.js", "admin");?>"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads…
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.html">&Phi;&Beta;&Epsilon; AdminCP</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="http://dmlittle.scripts.mit.edu/pbe/">View Site</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>Phi Bete (<a href="?logout">Logout</a>)</p>
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="#">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
<!--
		<form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
-->
		<h3>Active Brother Info</h3>
		<ul class="toggle">
			<li class="icn_new_article"><?php echo anchor($controller.'/create', 'New Active Brother');?></li>
			<li class="icn_categories"><?php echo anchor($controller.'/list_all', 'List Active Brothers');?></li>
			
			
		</ul>
		<h3>Alumni Brothers</h3>
		<ul class="toggle">
			<li class="icn_jump_back"><a href="#">Search Brothers</a></li>
			<li class="icn_folder"><a href="#">List Brothers</a></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2013 Website Admin</strong></p>
			<p>Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<h4 class="alert_info">NOTE: This panel is on its early development stages and not fully built. </h4>
				
<?php 	

$this->load->view($page);

?>
		
		<article class="module width_quarter">
			<header><h3>Officer Positions</h3></header>
				<div class="module_content">
					<div class="message"><p><strong>C</strong>: 
					<?php
						$query = $this->db->query("SELECT brotherName,brotherEmail FROM brothers WHERE brotherPosition='C'");
						foreach ($query->result() as $row){	echo '<a href="mailto:'.$row->brotherEmail.'@MIT.EDU">'.$row->brotherName.'</a>';}
					?>
					</p></div>
					<div class="message"><p><strong>VC</strong>: 
					<?php
						$query = $this->db->query("SELECT brotherName,brotherEmail FROM brothers WHERE brotherPosition='VC'");
						foreach ($query->result() as $row){	echo '<a href="mailto:'.$row->brotherEmail.'@MIT.EDU">'.$row->brotherName.'</a>';}
					?>
					</p></div>
					<div class="message"><p><strong>PC</strong>: 
					<?php
						$query = $this->db->query("SELECT brotherName,brotherEmail FROM brothers WHERE brotherPosition='PC'");
						foreach ($query->result() as $row){	echo '<a href="mailto:'.$row->brotherEmail.'@MIT.EDU">'.$row->brotherName.'</a>';}
					?>
					</p></div>
					<div class="message"><p><strong>&empty;</strong>: 
					<?php

						$query = $this->db->query("SELECT brotherName,brotherEmail FROM brothers WHERE brotherPosition='O'");
						foreach ($query->result() as $row){	echo '<a href="mailto:'.$row->brotherEmail.'@MIT.EDU">'.$row->brotherName.'</a>';}

					?>

					</p></div>
					<div class="message"><p><strong>&empty;&empty;</strong>: 
					<?php
						$query = $this->db->query("SELECT brotherName,brotherEmail FROM brothers WHERE brotherPosition='OO'");
						foreach ($query->result() as $row){	echo '<a href="mailto:'.$row->brotherEmail.'@MIT.EDU">'.$row->brotherName.'</a>';}
					?>
					</p></div>
					<div class="message"><p><strong>&empty;&empty;&empty;</strong>: ?</p></div>
					<div class="message"><p><strong>&empty;&empty;&empty;&empty;</strong>: ?</p></div>
					<div class="message"><p><strong>Th/Ath</strong>: ?</p></div>
					<div class="message"><p><strong>D/AD</strong>: ?</p></div>
					<div class="message"><p><strong>Comm/AComm</strong>: ?</p></div>
					<div class="message"><p><strong>Sc</strong>: ?</p></div>
					<div class="message"><p><strong>AC</strong>: ?</p></div>
					<div class="message"><p><strong>P/AP</strong>: ?</p></div>
					<div class="message"><p><strong>N/AN</strong>: ?</p></div>
					<div class="message"><p><strong>J</strong>: ?</p></div>
					<div class="message"><p><strong>PAC</strong>: Christian, Jacob, Kamil, Benji, Kevin</p></div>
				</div>
		</article><!-- end of messages article -->
		
		<div class="clear"></div>
		
		
		<div class="spacer"></div>
	</section>


</body>

</html>
