<?php echo doctype(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

$meta = array(
		array('name' => 'owner', 'content' => 'Twitch Interactive'),
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'description', 'content' => 'Twitch Interactive'),
        array('name' => 'keywords', 'content' => 'Get Some Keywords'),
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
    );
echo meta($meta);	

echo link_tag('assets/css/styles_site3.css');
?>
<title>Twitch Interactive</title>
<script src="<?php echo base_url();?>assets/js/jquery/jquery-1.6.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery/jquery-ui-1.8.14.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery/jquery-wiggle-min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery/jquery.tools.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery/slider.js" type="text/javascript"></script>
</head>
<body>
	<div class="site_wrapper">
		<div class="landn">
			<div class="logo">
				<img src="/assets/images/logo.png" />
			</div>
			<div class="nav">
				<a href="#"><div class="nav_item">home</div></a>
				<a href="#"><div class="nav_item">work</div></a>
				<a href="#"><div class="nav_item">about</div></a>
				<a href="#"><div class="nav_item">contact</div></a>
			</div>
		</div>
		<div id="slider">
			<img class="scrollButtons left" src="/assets/images/site/leftarrow.png">
			<div style="overflow: hidden; class="scroll">
				<div class="scrollContainer">
					<div class="panel" id="panel_1">
						<div class="inside">
							<img src="/assets/images/site/work/allens.jpg" alt="picture" />
							<h2>Allens</h2>
							<p>Say Something Right here... <a href="#">view project</a></p>
						</div>
					</div>
					<div class="panel" id="panel_2">
						<div class="inside">
							<img src="/assets/images/site/work/veg.jpg" alt="picture" />
							<h2>Veg-All</h2>
							<p>Say Something Right here... <a href="#">view project</a></p>
						</div>
					</div>
					<div class="panel" id="panel_3">
						<div class="inside">
							<img src="/assets/images/site/work/wapl.jpg" alt="picture" />
							<h2>WAPL</h2>
							<p>Say Something Right here... <a href="#">view project</a></p>
						</div>
					</div>
					<div class="panel" id="panel_4">
						<div class="inside">
							<img src="/assets/images/site/work/bone.jpg" alt="picture" />
							<h2>Bonewerks</h2>
							<p>Say Something Right here... <a href="#">view project</a></p>
						</div>
					</div>
					<div class="panel" id="panel_5">
						<div class="inside">
							<img src="/assets/images/site/work/dci.jpg" alt="picture" />
							<h2>DCI Cheese</h2>
							<p>Say Something Right here... <a href="#">view project</a></p>
						</div>
					</div>
				</div>
				<div id="left-shadow"></div>
				<div id="right-shadow"></div>
			</div>
		</div>
		<img class="scrollButtons right" src="/assets/images/site/rightarrow.png">
		<div class="services">
			<div class="service">
				<h2>interface design</h2>
				<p><img src="/assets/images/site/webdesign.jpg" /></p>
				<p>and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>
			<div class="service">
				<h2>corporate identity</h2>
				<p><img src="/assets/images/site/goal.jpg" /></p>
				<p>and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into .</p>
			</div>
			<div class="service_last">
				<h2>online strategy</h2>
				<p><img src="/assets/images/site/online.jpg" /></p>
				<p>and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</p>
			</div>
			<div class="clear"></div>
		</div>
	</div><!---END OF SITE_WRAPPER--->
	<div class="clear"></div>
	<!--
	<div class="footer">
			<div class="footer_wrap">
				<div class="sections">
					<h2>site links</h2>
					<div><a href="#">home</a></div>
					<div><a href="#">work</a></div>
					<div><a href="#">about</a></div>
					<div><a href="#">contact</a></div>
				</div>
				<div class="sections">
					
				</div>
				<div class="sections">
					
				</div>
				<div class="clear"></div>
			</div><
		</div>
	-->
	
	<div class="bottom">
		<div class="bottom_wrap">
			&copy;2011&nbsp;<a href="http://www.twitchinteractive.com">twitch interactive</a>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
    $(window).load(function(){ 
  		 $(".site_wrapper").fadeIn("slow");
		});
</script>