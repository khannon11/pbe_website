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

	//When page loads...
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
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
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
			<li class="icn_new_article"><a href="#">New Active Brother</a></li>
			<li class="icn_categories"><a href="#">List Active Brothers</a></li>
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
				
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Actives</h3>
		<ul class="tabs">
   			<li><a href="#tab1">2013</a></li>
    		<li><a href="#tab2">2016</a></li>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
					<th>ID</th> 
    				<th>Brother Name</th> 
    				<th>Class</th> 
    				<th>Number</th> 
    				<th>Is Active</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
    				<td>48</td> 
    				<td>Richard Yoon</td> 
    				<td>2013</td> 
    				<td>23</td> 
    				<td>Yes</td> 
   				 	<td><input type="image" src="<?php echo $this->assets->url("/icn_edit.png", "admin");?>" title="Edit"><input type="image" src="<?php echo $this->assets->url("/icn_trash.png", "admin");?>" title="Trash"></td> 
				</tr> 
				<tr> 
    				<td>47</td> 
    				<td>Timmy Galvin</td> 
    				<td>2013</td> 
    				<td>23</td> 
    				<td>Yes</td> 
   				 	<td><input type="image" src="<?php echo $this->assets->url("/icn_edit.png", "admin");?>" title="Edit"><input type="image" src="<?php echo $this->assets->url("/icn_trash.png", "admin");?>" title="Trash"></td> 
				</tr> 
				<tr> 
    				<td>46</td> 
    				<td>Matt Barron</td> 
    				<td>2013</td> 
    				<td>18</td> 
    				<td>Yes</td> 
   				 	<td><input type="image" src="<?php echo $this->assets->url("/icn_edit.png", "admin");?>" title="Edit"><input type="image" src="<?php echo $this->assets->url("/icn_trash.png", "admin");?>" title="Trash"></td> 
				</tr> 
				<tr> 
    				<td>45</td> 
    				<td>Kyle Hannon</td> 
    				<td>2013</td> 
    				<td>17</td> 
    				<td>Yes</td> 
   				 	<td><input type="image" src="<?php echo $this->assets->url("/icn_edit.png", "admin");?>" title="Edit"><input type="image" src="<?php echo $this->assets->url("/icn_trash.png", "admin");?>" title="Trash"></td> 
				</tr> 
				<tr> 
    				<td>44</td> 
    				<td>David Way</td> 
    				<td>2013</td> 
    				<td>16</td> 
    				<td>Yes</td> 
   				 	<td><input type="image" src="<?php echo $this->assets->url("/icn_edit.png", "admin");?>" title="Edit"><input type="image" src="<?php echo $this->assets->url("/icn_trash.png", "admin");?>" title="Trash"></td> 
				</tr> 
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
					<th>ID</th> 
    				<th>Brother Name</th> 
    				<th>Class</th> 
    				<th>Number</th> 
    				<th>Is Active</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
    				<td>28</td> 
    				<td>Devin Dee</td> 
    				<td>2016</td> 
    				<td>28</td> 
    				<td>Yes</td> 
   				 	<td><input type="image" src="<?php echo $this->assets->url("/icn_edit.png", "admin");?>" title="Edit"><input type="image" src="<?php echo $this->assets->url("/icn_trash.png", "admin");?>" title="Delete"></td> 
				</tr> 
				<tr> 
    				<td>27</td> 
    				<td>Kamil Mafoud</td> 
    				<td>2016</td> 
    				<td>27</td> 
    				<td>Yes</td> 
   				 	<td><input type="image" src="<?php echo $this->assets->url("/icn_edit.png", "admin");?>" title="Edit"><input type="image" src="<?php echo $this->assets->url("/icn_trash.png", "admin");?>" title="Trash"></td> 
				</tr> 
				<tr> 
    				<td>26</td> 
    				<td>Christian Reed</td> 
    				<td>2016</td> 
    				<td>26</td> 
    				<td>Yes</td> 
   				 	<td><input type="image" src="<?php echo $this->assets->url("/icn_edit.png", "admin");?>" title="Edit"><input type="image" src="<?php echo $this->assets->url("/icn_trash.png", "admin");?>" title="Trash"></td> 
				</tr> 
				<tr> 
    				<td>24</td> 
    				<td>Kevin Tu</td> 
    				<td>2016</td> 
    				<td>24</td> 
    				<td>Yes</td> 
   				 	<td><input type="image" src="<?php echo $this->assets->url("/icn_edit.png", "admin");?>" title="Edit"><input type="image" src="<?php echo $this->assets->url("/icn_trash.png", "admin");?>" title="Trash"></td> 
				</tr> 
			</tbody> 
			</table>

			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		<article class="module width_quarter">
			<header><h3>Officer Positions</h3></header>
				<div class="module_content">
					<div class="message"><p><strong>C</strong>: ?</p></div>
					<div class="message"><p><strong>VC</strong>: ?</p></div>
					<div class="message"><p><strong>PC</strong>: ?</p></div>
					<div class="message"><p><strong>&empty;</strong>: ?</p></div>
					<div class="message"><p><strong>&empty;&empty;</strong>: ?</p></div>
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
					<div class="message"><p><strong>PAC</strong>: ?</p></div>
				</div>
		</article><!-- end of messages article -->
		
		<div class="clear"></div>
		
		
		<div class="spacer"></div>
	</section>


</body>

</html>