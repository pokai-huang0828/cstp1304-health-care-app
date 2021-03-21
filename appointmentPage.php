<?php
require_once("inc/utilities/Page.class.php");
Page::header("Health Care App","css/page.css");
?>

<div class="row p-4">
     <nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
               <a class="bi bi-backspace" style="font-size:40px; color:black" href="reservationSearch.php"></a>
               <a href="mainPage.php"><img src="assets/logoIcon.jpg" alt=""></a>
               <form class="d-flex">
                    <a class="bi bi-chat-dots" style="font-size:40px; color:black" href="messageList.php"></a>
               </form>
          </div>
     </nav>
     <div class="container" style="width: 23rem;">
     
          <div class="card" >
               <img src="assets/doctor1.jpg" class="card-img-top" alt="..." height="310" >
               <div class="card-body">
                    <h5 class="card-title"><b>Jenny Carlie</b></h5><hr>
                    
                    <h6><b>Select a date & time (date and time):</b></h6>                    
                    <input type="datetime-local">
                    <p>
                    <h6><b>Office time: Mon-Sat 10:00-19:00</b></h6>

                    <p>                                            
                    <button class="btn btn-danger w-100 " type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Make an appointment (Meet by Phone Call)</button> 
                    <p>                                                               
                    <button class="btn btn-danger w-100 " type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Make an appointment (Meet by Text)</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered">
                         <div class="modal-content">
                              <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel">Check again.</h5>
                              </div>
                              <div class="modal-body">
                              Please make sure your date and time selected are in the office time, or your appointment will not be accepted.
                              </div>
                              <div class="modal-footer">
                                   <a type="button" class="btn btn-danger" href="viewAppointment.php">Confirm</a>
                                   <a type="button" class="btn btn-danger" data-bs-dismiss="modal">Go back and check</a>
                              </div>
                         </div>
                         </div>
                    </div>



               
               </div>
          </div>     
          
     </div>
     

</div>

<?php
Page::footer();
?>