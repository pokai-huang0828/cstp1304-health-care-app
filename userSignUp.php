<?php 
require_once("inc/utilities/Page.class.php");
require_once("inc/utilities/Form.class.php");
Page::header("Health Care Sign Up Page","css/page.css");
?>

<div class="row p-4">

	<div class="text-center">
		<a href="index.php">
			<img class="img-fluid" src="assets/logo.jpg" alt="">
		</a>		
	</div>
	<hr>
     <?php Form::signUpForm()?>

</div>

<?php
Page::footer();
?>