<?php 
require_once("inc/utilities/Page.class.php");
Page::header("Health Care App","css/page.css");
?>

<div class="row p-4">
     <nav class="navbar navbar-light bg-light">
          <div class="container">
               <a href="mainPage.php"><img src="assets/logoIcon.jpg" alt=""></a>
               
          </div>
     </nav>
     <div class="text-center">
          <br>
          <text style="font-size:20px">“Happiness is the only thing that multiplies when you share it.” –Albert Schweitzer</text>
        
     </div>
     <p>
     <br>
     <div class="container">
          <ul class="list-group">
               <a class="list-group-item" href="messagePage.php"><img src="assets/doctor1.jpg" alt="doctor1" width="60" height="60" style ="border-radius: 50%"> Jenny Carlie<span class="badge bg-danger" style="float:right">New</span></a>
               <li class="list-group-item"><img src="assets/doctor3.jpg" alt="doctor3" width="60" height="60" style ="border-radius: 50%"> Elaine Kathrine<span style="float:right">5 Days ago</span></li>
          </ul>
     </div>
     

</div>


<?php
Page::footer();
?>