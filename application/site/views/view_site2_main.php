<?php echo doctype(); ?>
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

echo link_tag('assets/css/styles_site2.css');
?>
<title>Twitch Interactive</title>
<script src="<?php echo base_url();?>assets/js/jquery/jquery-1.6.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery/jquery-ui-1.8.14.custom.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery/jquery-wiggle-min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/jquery/jquery.tools.min.js" type="text/javascript"></script>
</head>

<body>
	<div class="top_bg">
		<div class="top_wrap">
			<div class="logo">
				<img src="/assets/images/logo.png" />
			</div>
		<div class="nav">
			<div class="nav_item"><a href="#">home</a></div>
			<div class="nav_item"><a href="#">work</a></div>
			<div class="nav_item"><a href="#">about</a></div>
			<div class="nav_item"><a href="#">contact</a></div>
		</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="content">
			
		</div>
	</div>
	<div class="bottom_bg">
		
	</div>
</body>
</html>