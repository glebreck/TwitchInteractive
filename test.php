<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<style>
	.toggler { width: 500px; height: 200px; }
	#button { padding: .5em 1em; text-decoration: none; }
	#effect { width: 240px; height: 135px; padding: 0.4em; position: relative; }
	#effect h3 { margin: 0; padding: 0.4em; text-align: center; }
	</style>
	<script src="/assets/js/jquery/jquery-1.6.1.min.js" type="text/javascript"></script>
	<script src="/assets/js/jquery/jquery-ui-1.8.14.custom.min.js" type="text/javascript"></script>
</head>

<body>
<a href="#" id="mySlider_1" class="slidecontrol">Read More</a>
				
 
<hr/>

<a href="#" id="mySlider_2" class="slidecontrol">Read More 2</a>


<div id="myDisplay_1" style="display:none;">Display #1</div>
<div id="myDisplay_2" style="display:none;">Display #2</div>
 
</body>
</html>
<script type="text/javascript"> 
$(document).ready(function () {

	$('a.slidecontrol').click(function(){
		$('#[id^="myDisplay"]').slideUp(500);
		
		var $this = $(this);
		var divID = $this.attr("id").replace("mySlider_", "myDisplay_");
		var $div = $('#'+divID);
		if ($div.is(':visible')) {
			$div.slideUp(500);
		} else {
			$div.slideDown(500);
		}
		return false;
	});
	
});
</script>