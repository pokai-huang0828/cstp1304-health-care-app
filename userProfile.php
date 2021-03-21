<?php 
require_once("inc/utilities/Page.class.php");
require_once("inc/utilities/Form.class.php");
Page::header("Health Care Sign Up Page","css/page.css");
?>

<div class="row p-4">
     <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
          <a class="bi bi-backspace" style="font-size:40px ; color:black" href="mainPage.php"></a>
               <a href="mainPage.php"><img src="assets/logoIcon.jpg" alt=""></a>
               <form class="d-flex">
                    <a class="bi bi-chat-dots" style="font-size:40px; color:black" href="messageList.php"></a>
               </form>
          </div>
     </nav>
     <div class="text-center">
     <img src="assets/user1.jpg" alt="user1" text-align="center" style ="border-radius:50%; height:250px; width:250px">
     </div>
     <p>
     <hr>

     <?php Form::userInfoDisplay()?>

     <hr>
        <div class="form-group my-2">
            <a type="button" class="btn btn-danger w-100 btn-lg my-2" href="userEditInfo.php">Edit Info</a>
            <a type="button" class="btn btn-danger w-100 btn-lg my-2" href="viewAppointment.php">View your appointment</a>
        </div>
</div>

<?php
Page::footer();
?>