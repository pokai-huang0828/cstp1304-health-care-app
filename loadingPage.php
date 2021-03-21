<?php
require_once("inc/utilities/Page.class.php");
Page::header("Health Care App","css/page.css");
?>

<div class="row p-4">
     <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
               <a class="bi bi-backspace" style="font-size:40px ; color:black" href="liveHelpPage.php"></a>
               
          </div>
     </nav>
     <div class="text-center">
          <img src="assets/livehelp.jpg" alt="">
          <br>
          <text style="font-size:20px">“Life doesn’t make any sense without interdependence. We need each other, and the sooner we learn that, the better for us all.” –Erik Erikson</text>
          <br>
          <div class="spinner-grow text-danger" role="status">
          </div>
          <p>
          <text style="font-size:20px">Matching...</text>
          <p>

          <a style="font-size:20px ; color:black" href="messagePage.php">To text</a>
          <a style="font-size:20px ; color:black" href="phoneCall.php">To phone</a>
     </div>
     
     

</div>

<?php
Page::footer();
?>