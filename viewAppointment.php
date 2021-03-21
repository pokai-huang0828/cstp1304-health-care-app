<?php 
require_once("inc/utilities/Page.class.php");
Page::header("Health Care Sign Up Page","css/page.css");
?>

<div class="row p-4">
     <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
          <a class="bi bi-backspace" style="font-size:40px ; color:black" href="userProfile.php"></a>
               <a href="mainPage.php"><img src="assets/logoIcon.jpg" alt=""></a>
               <form class="d-flex">
                    <a class="bi bi-chat-dots" style="font-size:40px; color:black" href="messageList.php"></a>
               </form>
          </div>
     </nav>
     <p>
     
     <div class="text-center">
          <text style="font-size:20px">Appointment Details</text>
          <hr>
     </div>

     <div class="container" style="width: 20rem;">
     
          <div class="card" >
               <img src="assets/doctor1.jpg" class="card-img-top" alt="..." height="240">
               <div class="card-body">
                    <h5 class="card-title"><b>Jenny Carlie</b></h5><hr>
                    <p class="card-text"><b>Time:</b> 11:30 AM<p>
                                        <b>Date:</b> March, 24th, 2021<p>
                                        <b>Meeting by:</b> Phone Call<p>      
                    </p><hr>
                    <p> 
                    <a href="#" class="btn btn-danger">Cancel the appointment</a>
               
               </div>
          
     </div>
</div>
     
</div>

<?php
Page::footer();
?>