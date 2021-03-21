<?php 
require_once("inc/utilities/Page.class.php");
Page::header("Health Care App", "css/page.css");

?>

<nav class="navbar navbar-light bg-light">
          <div class="container-fluid">
               <a href="mainPage.php"><img src="assets/logoIcon.jpg" alt=""></a>
               <text class="text-center" style="font-size: large;"><b>Jenny Carlie</b></text>
               <form class="d-flex">
                    <a class="bi bi-chat-dots" style="font-size:40px; color:black" href="messageList.php"></a>
               </form>
          </div>
     </nav>
     
     <div class="border rounded" style="padding:10px">
          <div class="row d-flex flex-row">
               <div class="col-10 col-sm-8">
                    <div class="card">   
                         <div class="card-body customer-text"> 
                              <img style="float:left" width="60" height="60" src="assets/doctor1.jpg" alt="">    
                              <h5 class="card-title"><b>Jenny Carlie</b></h5>
                              <span class="card-text">Hello!! My name is Jenny, how can I help you? <p> Date: March 24, 2021</span>
                              
                         </div>
                    </div>
               </div>
          </div>
          <p>
          <div class="row d-flex flex-row-reverse">
               <div class="col-10 col-sm-8">
                    <div class="card">   
                         <div class="card-body customer-text"> 
                              <img style="float:right" width="60" height="60" src="assets/user1.jpg" alt="">    
                              <h5 class="card-title"><b>Ella Greene</b></h5>
                              <span class="card-text">Nice to meet you Dr. Jenny. I need some help for my situation...<p> Date: March 24, 2021</span>
                              
                         </div>
                    </div>
               </div>
          </div>
          <p>
          <div class="row d-flex flex-row">
               <div class="col-10 col-sm-8">
                    <div class="card">   
                         <div class="card-body customer-text"> 
                              <img style="float:left" width="60" height="60" src="assets/doctor1.jpg" alt="">    
                              <h5 class="card-title"><b>Jenny Carlie</b></h5>
                              <span class="card-text">Sure. Before we start, let me ask you some questions. <p> Date: March 24, 2021</span>
                              
                         </div>
                    </div>
               </div>
          </div>
     

    <hr>
    <div class="row text-center align-items-center" id="messageInput" style="margin:0">
            <div class="col-8 col-sm-8">
                <input type="text" name="textMessage" id="textMessage" style="width:100%">
            </div>
            <div class="col-4 col-sm-4">
                <button class="btn btn-danger" style="margin:1px"><i class="bi bi-camera"></i></button>
                <span><button class="btn btn-danger"><i class="bi bi-play"></i></button></span>
            </div>
    </div>

</div>

<?php
Page::footer();
?>