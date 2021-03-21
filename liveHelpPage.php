<?php
require_once("inc/utilities/Page.class.php");
Page::header("Health Care App","css/page.css");
?>

<div class="row p-4">
     <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
               <a href="mainPage.php"><img src="assets/logoIcon.jpg" alt=""></a>
               <form class="d-flex">
                    <a class="bi bi-chat-dots" style="font-size:40px ; color:black" href="messageList.php"></a>
               </form>
          </div>
     </nav>
     <div class="text-center">
          <img src="assets/livehelp.jpg" alt="">
          <br>
          <text style="font-size:20px">“It is not primarily our physical selves that limit us but rather our mindset about our physical limits. ” –Ellen  J.Langer</text>
        
     </div>
     <p>
     <br>
     <div class="text-center">
          <span>     
               <a href="loadingPage.php"><img class="rounded" src="assets/textmessage.jpg" alt=""></a>
               <a href="loadingPage.php"><img class="rounded" src="assets/phonecall.jpg" alt=""></a>
          </span>         
     
     </div>
     

</div>

<?php
Page::footer();
?>