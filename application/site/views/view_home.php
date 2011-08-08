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

echo link_tag('assets/css/styles.css');
?>
<title>Twitch Interactive</title>
<script src="<?php echo base_url();?>assets/js/jquery/jquery-1.6.1.min.js" type="text/javascript"></script>
</head>
<body>
<div id="logo_container" class="logo_bg">
	<div id="logo" class="logo">
  </div>
  <div id="tot" class="tot">
  	a totally new experience in online
  </div>
  <div id="comming" class="comming">
  	Coming Soon August 2011!
  </div>
  <div id="miss" class="miss">
  	make sure and come back cause you don't wanna miss this
  </div>
  <div id="contact" class="contact">
  	<div class="mail"><?php echo mailto('info@twitchinteractive.com'); ?></div>
    <div class="phone">920.328.5008</div>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
    $(window).load(function(){ 
  		 $(".logo_bg").fadeIn("slow");
		});
</script>