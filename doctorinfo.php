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
               <p class="card-text"><b>Qualifications:</b><p>
                              Licence: British Columbia/1975<p>
                              School: Antioch University Seattle<p></p>
                              <b>Specialties:</b>
                                   <p>1.Anxiety
                                   <p>2.Depression
                                   <p>3.Divorce          
               </p><hr>
               <b>About:</b><p class="bg clearfix">
                    I am a Registered Psychologist in BC (1691) and I have twenty years experience. I have an office in Mission, BC. I provide compassionate and effective therapy for issues such as depression, anxiety, obsessive compulsive disorders, addictions, self harm, grief, abuse, health and fitness, aging, life transitions, caregiver stress, dementia, special needs (such as FASD, autism spectrum, etc.). Counselling primarily involves developing a trusting relationship, understanding/exploring what challenges you face, and together, figuring out which approach works best for you and your concerns in effecting positive change in your life.
               I see adults and teens with various issues. I provide encouragement and support so that my clients learn better coping skills such that they find greater satisfaction in their lives.
               </p>

               
                   <p> 
                    <a href="appointmentPage.php" class="btn btn-danger">Appointment</a>
               
               </div>
          
     </div>
     

</div>

<?php
Page::footer();
?>