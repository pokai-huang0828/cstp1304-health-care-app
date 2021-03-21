<?php 
require_once("inc/utilities/Page.class.php");
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
     <p>
     
     <div class="text-center">
          <text style="font-size:20px">“Even a happy life cannot be without a measure of darkness, and the word happy would lose its meaning if it were not balanced by sadness.” –Carl G. Jung</text>
          <p>
          <br>
          <text style="font-size:20px"><b>Mood Diary</b></text>
          <hr>
     </div>

     <div class="container" style="width: 25rem;">
     
          <div class="card" >
               
               <div class="card-body">
                    <h5 class="card-title text-center"><i class="bi bi-arrow-left-square"></i><b> March 21th 2021 </b><i class="bi bi-arrow-right-square"></i></h5>
                    <hr>
                    <table class="table">
                         <thead>
                              <tr>
                                   <th scope="col"> Sun </th>
                                   <th scope="col"> Mon </th>
                                   <th scope="col"> Tue </th>
                                   <th scope="col"> Wed </th>
                                   <th scope="col"> Thr </th>
                                   <th scope="col"> Fri </th>
                                   <th scope="col"> Sat </th>
                              </tr>
                         </thead>
                         <tbody>
                              <tr>
                                   <th scope="row"> 21 </th>
                                   <th scope="row"> 22 </th>
                                   <th scope="row"> 23 </th>
                                   <th scope="row"> 24 </th>
                                   <th scope="row"> 25 </th>
                                   <th scope="row"> 26 </th>
                                   <th scope="row"> 27 </th>
                              </tr>                    
                    </table>
                    <div class="text-center">
                         <h5><b>Select your day of your mood</b></h5>

                         <i class="bi bi-emoji-laughing" style="font-size:40px ; color:black"></i>
                         <i class="bi bi-emoji-smile" style="font-size:40px ; color:black"></i>
                         <i class="bi bi-emoji-neutral" style="font-size:40px ; color:black"></i>
                         <i class="bi bi-emoji-frown" style="font-size:40px ; color:black"></i>
                         <i class="bi bi-emoji-dizzy" style="font-size:40px ; color:black"></i>
                         <i class="bi bi-emoji-angry" style="font-size:40px ; color:black"></i>

                    </div>
                    <div class="input-group-center">
                         <h5 class="text-center">Briefly describe your mood today</h5>
                         <p>
                         <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>     
                    </p><hr>
                    <p> 
                    <button class="btn btn-danger w-100 " type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Save</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered">
                         <div class="modal-content">
                              <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLabel">Successful Saved</h5>
                              </div>
                              <div class="modal-body">
                              This mood diary is private. You can track your mood and help you release your stress.
                              </div>
                              <div class="modal-footer">
                                   
                                   <a type="button" class="btn btn-danger" data-bs-dismiss="modal">Got it</a>
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