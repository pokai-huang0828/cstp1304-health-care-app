<?php
require_once("inc/utilities/Page.class.php");
Page::header("Health Care App","css/page.css");
?>

<div class="row p-4">
     <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
          <a class="bi bi-door-open" style="font-size:40px; color:black" href="loginPage.php"></a>
               <form class="d-flex">
                    <a class="bi bi-chat-dots" style="font-size:40px; color:black" href="messageList.php"></a>
               </form>
          </div>
     </nav>
     <div class="text-center">
          <a href="mainPage.php"><img class="loginpic" src="assets/logo.jpg" alt=""></a>
          <p>
               <br>

          <text style="font-size:20px">"Tough times never last but tough people do." – Robert H. Schiuller</text>
        
     </div>
     <p>
     <br>
     <div class="text-center">
          <a href="liveHelpPage.php"><img class="rounded" src="assets/livehelp.jpg" alt=""></a>
          <a href="reservationSearch.php"><img class="rounded" src="assets/reservation.jpg" alt=""></a>
          <a href="mooddiaryPage.php"><img class="rounded" src="assets/mood.jpg" alt=""></a>
          <a href="userProfile.php"><img class="rounded" src="assets/profile.jpg" alt=""></a>
     
     </div>
     

</div>

<?php
Page::footer();
?>