<?php

$bclass = 'contact';
require('incs/template/header.php');
?>

<div id="page">

			
<section class="enquiry">
	
	<article class="form clearfix">
		<!--<h2 class="pea">Handy Form</h2>-->
	<form action="/contact/enquiry-form/" method="post" id="form_enquiry" class="default mod single"> 
		<fieldset id="enquiry_set"> 
			<p class="clearfix"> 
				<label class="mp" for="enquiry_name">Name:</label> 
				<input type="text" name="enquiry_name" id="enquiry_name" class="def" value="" />
			</p> 
			<p class="clearfix"> 
				<label class="mp" for="enquiry_email">Email:</label> 
				<input type="text" name="enquiry_email" id="enquiry_email" class="def" value="" /> 
			</p> 
			<p class="clearfix"> 
				<label class="mp" for="enquiry_email">Message:</label> 
				<textarea cols="60" rows="10" name="enquiry_message" id="enquiry_message" ></textarea> 
			</p> 
		</fieldset> 
		<button type="submit" name="submit" value="true" class="btn big green">Send</button> 
		<input type="hidden" name="formID" value="form_enquiry" /> 
	</form> 
	
	<address class="mp">
		<span>Steven Urmston</span>
		<span>65 Beaconsfield Street,</span>
		<span>Acomb,</span>
		<span>York</span>
		<span>YO24 4NB</span>
	</article>


</section>

</div>

<?php
require('incs/template/footer.php');