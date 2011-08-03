<div id="myDisplay_3" class="infoblock">
	<div id="work_area">
		<div id="contact_form">
			<h2>contact us</h2>
			<fieldset>
				<?php
					echo form_open('site/sendmail');
					echo '<div class="form_label">name: </div>';
					echo form_input('name', set_value('name'));
					echo '<div class="form_label">email: </div>';
					echo form_input('email', set_value('email'));
					$data_id = array(
						'name' => 'phone',
						'id'	=> 'phone'
					);
					echo '<div class="form_label">phone: </div>';
					echo form_input($data_id, set_value('phone'));
					$data = array (
						'name' => 'inquiry',
						'cols' => 45,
						'rows' => 15
					);
					echo '<div class="form_label">your message: </div>';
					echo form_textarea($data, set_value('inquiry'));
					echo form_submit('submit', 'send your message', 'submit');
				?>
			</fieldset>
		</div>
	</div>
</div>
