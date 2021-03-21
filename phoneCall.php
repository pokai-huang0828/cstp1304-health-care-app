<?php 
require_once("inc/utilities/Page.class.php");
Page::header("Health Care App","css/page.css");
?>

<div class="row p-4">
     <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
               <a href="mainPage.php"><img src="assets/logoIcon.jpg" alt=""></a>
               <text class="text-center" style="font-size: large;"><b>Jenny Carlie</b></text>
               <form class="d-flex">
                    <a class="bi bi-chat-dots" style="font-size:40px; color:black" href="messageList.php"></a>
               </form>
          </div>
     </nav>
     <img src="assets/doctor1.jpg" alt="" class="rounded mx-auto d-block" style="max-width: 50% ; max-height:50%">
     <div class="text-center">
          <a href="#"><i class="bi bi-mic-mute-fill" style="font-size:80px; color:black"></i>  </a>
          <a href="#"><i class="bi bi-camera-video-fill" style="font-size:80px; color:black"></i>  </a>
          <a href="#"><i class="bi bi-volume-up-fill" style="font-size:80px; color:black"></i>  </a>
          <br>
          <p>
          <a href="mainPage.php"><img class="rounded" src="assets/phoneoff.jpg" alt=""></a>
     
     </div>
     

</div>


<?php
Page::footer();
?>