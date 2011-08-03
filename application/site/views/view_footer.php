<div id="footer" class="class_footer">
			<div id="footer_wrap">
				<div id="left">
					<b>about me</b>
                	 from the time the internet was still in its infancy, <div class="levifuson">levifuson</div> has been at the forefront of design and development for web user interaction. he has <strong>designed</strong> and <strong>developed</strong> user experiences for such brands as <strong>Holland House</strong><sup>&reg;</sup> Cooking Wine, <strong>NAKANO</strong><sup>&reg;</sup> Seasoned Rice Vinegars, <strong>Joan of Arc</strong><sup>&reg;</sup>, <strong>Salemville</strong><sup>&reg;</sup>, <strong>CastleX</strong>, <strong>VegAll</strong><sup>&reg;</sup>, <strong>Freshlike</strong><sup>&reg;</sup>, <strong>Popeye Spinach</strong><sup>&reg;</sup>. with experience in many different industries such as <em>health care</em>, <em>financial</em>, <em>food</em>, <em>retail</em>, <em>government</em> and more. working as the creative director, interactive director and vice president at tech start-ups and multiple agencies has given levi a unique knowledge of the web industry and creating an effective online user experience.
				</div>
				<div id="right">
	            	<b>tag cloud</b>
	                <a href="/Contact/" class="small">user</a>
	                <a href="/Why/" class="med">interaction </a>
	                <a href="/Why/" class="small">internet explorer</a> 
	                <a href="/Work/" class="big">web design</a> 
	                <a href="/Contact/" class="biggest">iOS </a>
	
	                <a href="/Why/" class="small">experience </a>
	                <a href="/Process/" class="med">development </a>
	                <a href="/Process/" class="small">firefox </a>
	                <a href="/Why/#how" class="big">consulting</a>
	                <a href="/Why/" class="biggest">social networks</a> 
	                <a href="/Process/" class="biggest">site</a> 
	                <a href="/Why/#how" class="small"> mobile</a> 
	                <a href="/Why/" class="small">application</a> 
	                <a href="/Why/#how" class="med">android</a> 
	                <a href="/Contact/" class="med">contact</a> 
	                <a href="/Why/#levi" class="biggest">levi</a> 
	                <a href="/Work/" class="med">safari</a> 
	                <a href="/Why/#how" class="big">interaction</a> 
	                <a href="/Why/#how" class="small">consultant</a>
	
	                <a href="/Why/#how" class="big">e-commerce</a>
	                <a href="/Why/#how" class="med">SEO</a>
	                <br><br>
	                <div class="divider"></div>
	                <strong>&copy; copyright 2011</strong> <br> twitchInteractive . all rights reserved. 
            	</div>

			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript"> 
$(document).ready(function () {
/////////////////////////////////////////////////////////////////////////////////////
		////	SLIDE PANELS UP AND DOWN	////
	$('a.slidecontrol').click(function(){
		$('#[id^="myDisplay"]').slideUp(500).delay(625);
		
		var $this = $(this);
		var divID = $this.attr("id").replace("mySlider_", "myDisplay_");
		var $div = $('#'+divID);
		if($div.is(':visible')) {
			$div.slideUp(500);
		}else{
			$div.slideDown(500);
		}
		return false;
	});
////////////////////////////////////////////////////////////////////////////////////
		//// WIGGLE THE NAV GUYS	////	
	$('a.slidecontrol').mouseover( function() {
		var $this = $(this);
		var wiggleID = $this.attr("id").replace("mySlider_", "wiggler_");
		var $toWiggle = $('.'+wiggleID);
		$toWiggle.wiggle();
		return false;
	});		
//////////////////////////////////////////////////////////////////////////////////	
});
</script>
<script>
// For the scrollable
$(function() {

	// initialize scrollable
	$(".scrollable").scrollable();
	
	//$("#nav_img img[title]").tooltip();

});
</script>
