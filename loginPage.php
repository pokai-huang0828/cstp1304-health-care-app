<?php 
require_once("inc/utilities/Page.class.php");
require_once("inc/utilities/Form.class.php");
Page::header("Health Care App","css/page.css");
?>

<div class="row p-4">
	
     <div class="text-center">
          <img class="loginpic" src="assets/logo.jpg" alt="">
     </div>

     <div class="col-12 col-sm-6 offset-sm-3 align-self-start">
          <div class="px-4">
               <?php Form::signInForm() ?>
          </div>
     </div>

</div>

<?php
Page::footer();
?>
