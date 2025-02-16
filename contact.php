<?php
 require_once('admin/scripts/config.php');
 if(isset($_POST['submit'])){
   $direct = "thankyou.php";
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $unwanted = $_POST['unwanted'];
   $message = $_POST['message'];
   // echo $name;
   if($unwanted === ""){
   // echo "send mail";
   $sendMail = submitMessage($direct, $name, $email, $subject, $message);
 }else{
   // echo "go away bot";
 }
}

 ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather|Merriweather+Sans" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="css/style.css">
     <link rel="icon" type="image/png" href="images/logo.png" sizes="96x96"/>
 <link rel="icon" type="image/png" href="images/logo.png" sizes="32x32"/>
 <link rel="icon" type="image/png" href="images/logo.png" sizes="16x16"/>
 <link rel="icon" type="image/png" href="images/logo.png" sizes="128x128"/>
     <title>Soumya Contact</title>
 </head>

 <body class="contactpage">

     <div class="small visible-sm visible-md visible-xs">

         <div class="container">

           <nav class="navbar navbar-light row" style="background-color: #001a1f;">
               <img class="img-fluid col-xs-3 col-sm-2 col-md-2" src="images/desktop/logo.png" alt="Logo">
               <!-- <div type="button" class="col-xs-2 col-sm-1 col-md-1 col-xs-offset-7 col-sm-offset-8 col-md-offset-8 hamButton"> -->

                 <div type="button" data-dismiss="modal" class=" col-xs-2 col-sm-1 col-md-1 col-xs-offset-7 col-sm-offset-8 col-md-offset-8" data-toggle="modal" data-target="#overlay"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></div>

                 <!-- Modal -->
                 <div id="overlay" class="modal fade"  >
                   <div class="modal-dialog"  >

                     <!-- Modal content-->
                       <ul class="row">
                           <li><a href="index.php"><h3>HOME</h3></a></li>
                           <li><a href="about.php"><h3>ABOUT</h3></a></li>
                           <li><a href="work.php"><h3>WORK</h3></a></li>
                           <li><a href="contact.php"><h3>CONTACT</h3></a></li>
                           <li data-dismiss="modal" ><span class="glyphicon glyphicon-chevron-up" aria-hidden="true" data-dismiss="modal"></span></li>
                       </ul>
                   </div>
                 </div>
           </nav>
         </div>
     </div>

     <!-- <div class="visible-lg visible-xl"> -->

     <!-- Side Wrapper -->
     <!-- <div id="wrapper"> -->
         <div id="sidebar-wrapper" class="visible-lg visible-xl hide-sm hide-md hide-xs">
             <ul class="sidebar-nav visible-lg visible-xl">
                 <li><img src="images/desktop/logo.png" alt="Logo"></li>
                 <div class="navigation">
                     <a href="index.php">HOME</a>
                     <a href="about.php">ABOUT</a>
                     <a href="work.php">WORK</a>
                     <a href="contact.php">CONTACT</a>
                 </div>
             </ul>
         </div>
         <div id="page-content-wrapper">
             <div class="page-content">
                 <div class="container ">
                     <div class="row contact visible-lg visible-xl contactForm">
                         <h1 class=" col-lg-6 col-xl-6 col-md-10 col-sm-10 col-xs-10 col-lg-offset-3 col-xl-offset-3 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 ci">Say <span >Hello !</span> </h1>
                     <!-- </div>
                         <div class="row"> -->
                             <h2 class="col-lg-10 col-xl-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-xl-offset-1 ">Looks like I caught your attention, I'd love to hear from you. Any information or question, please leave a message and I'll get back within 24 hours! </h2>
                         </div>


   <div class="row contact visible-xs visible-sm visible-md col-xs-offset-1 col-sm-offset-1 col-md-offset-1 smallci">
       <h1 class="col-md-9 col-sm-9 col-xs-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 ci">Say <span >Hello !</span> </h1>
           <h2 class="col-lg-10 col-xl-10 col-md-10 col-sm-10 col-xs-10 col-lg-offset-1 col-xl-offset-1 ">Looks like I caught your attention, I'd love to hear from you. Any information or question, please leave a message and I'll get back within 24 hours! </h2>
       </div>

       <!-- Contact Form -->
        <div >
                         <form action="contact.php" name="contactform" method="post" id="contactForm" class="row" >
                             <div class="form-row">
                                 <div class="form-group col-xs-10 col-sm-10 col-md-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
<!-- <label class="visible-xs visible-sm visible-md"> Full Name</label> -->
                                     <input type="text" class="form-control" name="name" id="inputName" placeholder="Full Name" required>
                                 </div>
                                 <div class="form-group col-xs-10 col-sm-10 col-md-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-5 col-xl-5 ">
                                     <input type="email" class="form-control" name="email" id="inputEmail" placeholder="E-mail" required>
                                 </div>
                             </div>
                             <div class="form-group  col-xs-10 col-sm-10 col-md-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-11 col-xl-11 col-lg-offset-1 col-xl-offset-1">
                                 <input type="text" class="form-control" name="subject" id="inputSubject" placeholder="Subject">
                             </div>

                             <div class="hidden col-xs-10 col-sm-10 col-md-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-11 col-xl-11 col-lg-offset-1 col-xl-offset-1">
                               <input type="text" class="form-control" name="unwanted" id="inputUnwanted" placeholder="Unwanted">
                             </div>

                             <div rows="4" class="form-group  col-xs-10 col-sm-10 col-md-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-11 col-xl-11 col-lg-offset-1 col-xl-offset-1" style="width: 100%, height:300px">
                                 <textarea id="inputMessage" name="message" class="form-control textbox" name="message" tabindex="4" placeholder="Message" required></textarea>
                             </div>
                             <button type="submit" name="submit" value="send" class="btn btn-primary col-xs-4 col-sm-4 col-md-4 col-xs-offset-4 col-sm-offset-4 col-md-offset-4 col-lg-2 col-xl-2 col-lg-offset-5 col-xl-offset-5">SEND MESSAGE</button>
                         </form>

                         <div class="col-xs-10 col-sm-10 col-md-10 col-lg-11 col-xl-11 col-lg-offset-2 col-xl-offset-2 socialMedia visible-lg visible-xl">
                             <div>Or, you can also <br>Connect with me </div>
                               <a href="https://www.facebook.com/soumya.bhat" target="_blank"><img class="img-fluid" src="images/desktop/facebook.png" alt="Facebook icon"></a>
                               <a href="https://twitter.com/SoumyaBhat91" target="_blank"><img class="img-fluid" src="images/desktop/twitter.png" alt="Twitter icon"></a>
                               <a href="https://www.instagram.com/ingenious.visionary" target="_blank"><img class="img-fluid" src="images/desktop/instagram.png" alt="Instagram icon"></a>
                               <a href="https://www.linkedin.com/in/soumyabhat91/" target="_blank"><img class="img-fluid" src="images/desktop/linkedin.png" alt="LinkedIn icon"></a>
                               <a href="https://soundcloud.com/soumya-bhat91" target="_blank"><img class="img-fluid" src="images/desktop/soundcloud.png" alt="SoundCloud icon"></a>
                               <a href="https://www.youtube.com/channel/UCNZtWYPQU7aLMEOofAkQrng?view_as=subscriber" target="_blank"><img class="img-fluid" src="images/desktop/youtube.png" alt="Youtube icon"></a>
                         </div>
                           <div class="row socialMedia visible-xs visible-sm visible-md smallci">
                               <div class="col-xs-10 col-xm-10 col-md-10 col-xs-offset-1 cl-sm-offset-1 col-md-offset-1">You can also connect with me </div>
                         </div>
                         <div class="row smallci visible-xs visible-sm visible-md ">
                               <div class="col-xs-10 col-sm-10 col-md-8 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                              <a href="https://www.facebook.com/soumya.bhat" target="_blank"><img class="img-fluid img-responsive" src="images/mobile/facebook.png" alt="Facebook icon"></a>
                               <a href="https://twitter.com/SoumyaBhat91" target="_blank"><img class="img-fluid " src="images/mobile/twitter.png" alt="Twitter icon"></a>
                               <a href="https://www.instagram.com/ingenious.visionary" target="_blank"><img class="img-fluid    img-responsive" src="images/mobile/instagram.png" alt="Instagram icon"></a>
                               <a href="https://www.linkedin.com/in/soumyabhat91/" target="_blank"><img class="img-fluid   img-responsive" src="images/mobile/linkedin.png" alt="LinkedIn icon"></a>
                               <a href="https://soundcloud.com/soumya-bhat91" target="_blank"><img class="img-fluid  img-responsive" src="images/mobile/soundcloud.png" alt="SoundCloud icon"></a>
                               <a href="https://www.youtube.com/channel/UCNZtWYPQU7aLMEOofAkQrng?view_as=subscriber" target="_blank"><img class="img-fluid img-responsive" src="images/mobile/youtube.png" alt="Youtube icon"></a>
                         </div>
                 </div>
             </div>
         </div>
     </div>
     </div>
     </div>

     <!-- Script -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
     <!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script>
 -->
     <script src="js/contact.js"></script>


 </body>

 </html>
