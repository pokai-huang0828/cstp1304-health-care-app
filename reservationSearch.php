<?php
require_once("inc/utilities/Page.class.php");
Page::header("Health Care App","css/page.css");
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
     <div class="input-group rounded">
          <input type="search" class="form-control rounded" placeholder="Search for the doctor" aria-label="Search" aria-describedby="search-addon" />
          <span class="input-group-text border-0" id="search-addon">
               <i class="fas fa-search"></i>
          </span>
     </div>
     <p>

     <div class="row">
     <div class="col-sm-4" style="width: 18rem;">
          <div class="card" >
               <img src="assets/doctor1.jpg" class="card-img-top" alt="..." height="240" >
               <div class="card-body">
               <h5 class="card-title"><b>Jenny Carlie</b></h5><hr>
               <p class="card-text"><b>Qualifications:</b><p>
                              Licence: British Columbia/1975<p>
                              School: Antioch University Seattle<p></p>
                              <b>Specialties:</b>
                                   <p>1.Anxiety
                                   <p>2.Depression
                                   <p>3.Divorce          
               </p>


               <span>
                    <a href="doctorinfo.php" class="btn btn-danger">Info</a>
                    <a href="appointmentPage.php" class="btn btn-danger">Appointment</a>
               </span>
               </div>
          </div>
     </div>
     <div class="col-sm-4" style="width: 18rem;">
          <div class="card" >
               <img src="assets/doctor2.jpg" class="card-img-top" alt="..." height="240" >
               <div class="card-body">
               <h5 class="card-title"><b>David Wang</b></h5><hr>
               <p class="card-text"><b>Qualifications:</b><p>
                              Licence: British Columbia / 1184<p>
                              School: University of Alberta<p></p>
                              <b>Specialties:</b>
                                   <p>1.Relationship Issues
                                   <p>2.Self Esteem
                                   <p>3.Infidelity          
               </p>


               <span>
                    <a href="doctorinfo.php" class="btn btn-danger">Info</a>
                    <a href="appointmentPage.php" class="btn btn-danger">Appointment</a>
               </span>
               </div>
          </div>
     </div>
     <div class="col-sm-4" style="width: 18rem;">
     <div class="card">
          <img src="assets/doctor5.jpg" class="card-img-top" alt="..." height="240" >
          <div class="card-body">
          <h5 class="card-title"><b>Elaine Kathrine</b></h5><hr>
          <p class="card-text"><b>Qualifications:</b><p>
                              Licence: British Columbia / 1691<p>
                              School: Simon Fraser University<p></p>
                              <b>Specialties:</b>
                                   <p>1.Anxiety
                                   <p>2.Depression
                                   <p>3.Developmental Disorders          
               </p>

               <span>
                    <a href="doctorinfo.php" class="btn btn-danger">Info</a>
                    <a href="appointmentPage.php" class="btn btn-danger">Appointment</a>
               </span>
          </div>
     </div>
     </div>
     
     </div>
     

</div>

<?php
Page::footer();
?>