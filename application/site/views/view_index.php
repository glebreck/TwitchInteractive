<?php
	$this->load->view('view_header');
?>
		<div id="top" class="class_top">
			<div id="logo" class="class_logo">
				<img src="/assets/images/site/home_logo.png" />
			</div>
			<div id="nav" class="class_nav">
				<div class="nav_item">
					<div id="nav_img">
						<img src="/assets/images/site/guy_wink.png" title="This is my title" id="wiggler_1" class="wiggler_1">
					</div>
					<div>
						<a href="#" id="mySlider_1" class="slidecontrol">work</a>
					</div>
				</div>
				<div class="nav_item">
					<div>
						<img src="/assets/images/site/guy_smile.png" id="wiggler_2" class="wiggler_2">
					</div>
					<div>
						<a href="#" id="mySlider_2" class="slidecontrol">the process</a>
					</div>
				</div>
				<div class="nav_item">
					<div>
						<img src="/assets/images/site/guy_o.png" id="wiggler_3" class="wiggler_3">
					</div>
					<div>
						<a href="#" id="mySlider_3" class="slidecontrol">contact</a>
					</div>
				</div>
			</div>
		</div>
		<div id="panel" class="class_copysec">
			<?php $this->load->view('view_work'); ?>
			<?php $this->load->view('view_process');?>
			<?php $this->load->view('view_contact')?>
		</div>
<?php
	$this->load->view('view_footer');
?>		