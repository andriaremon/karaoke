<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>My Web</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="sass/bootstrap.min.css">
<link rel="stylesheet" href="sass/w3.css">
<link rel="stylesheet" href="sass/all.min.css">
<link rel="stylesheet" href="sass/fontawesome.min.css">
<link rel="stylesheet"  href="sass/massage.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
   
    <div class="w3-bar w3-black w3-border w3-xlarge">
        <a href="profile.php" class="w3-bar-item w3-button w3-green"><i class="fa fa-home"></i></a>
        <a href="infornation.html" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i></a>
        <a href=" https://ar-ar.facebook.com/Cairokee/"  target="_blank"   class="w3-bar-item w3-button"><i class="fa fa-facebook fa-lg"></i></a>
        <a href="https://twitter.com/search?q=%D9%83%D8%A7%D9%8A%D8%B1%D9%88%D9%83%D9%8A%20&src=typed_query" target="_blank"  class="w3-bar-item w3-button"><i class="fa fa-twitter fa-lg"></i></a>
        <a href="https://www.youtube.com/watch?v=HnSS22RYuGQ&list=RDXssakiLXCws&index=20" target="_blank" class="w3-bar-item w3-button"><i class="fa fa-youtube fa-lg"></i> </a>
      </div>
      <form action="profile.php" class="w3-container w3-card-4 w3-black w3-text-blue  w3-margin">
        <h2 class="w3-center">Contact Us</h2>
         
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border" name="first" type="text" placeholder="First Name">
            </div>
        </div>
        
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border" name="last" type="text" placeholder="Last Name">
            </div>
        </div>
        
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border" name="email" type="text" placeholder="Email">
            </div>
        </div>
        
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone">
            </div>
        </div>
        
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
            <div class="w3-rest">
              <input class="w3-input w3-border" name="message" type="text" placeholder="Message">
            </div>
        </div>
        
        <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Send</button>
        
        </form>
    <a target="_blank" href="profile.php">
      <div class="toggle-animation" id="svg-wrapper">
      <img src="image/download.png" alt="Logo" style="width: 99px;" class="rounded-pill" >
      </div>
    </a>
   
  
  <div class="toggle col-lg-4 col-md-4 col-sm-3 ">
    <div class="social">
    </div>
  
  
 
  
    <audio  controls autoplay hidden>
        <source src="image/y2mate.com - Cairokee  I Thought there was still time  كايروكي  كنت فاكر.mp3" type="audio/mp3 ">
        <source src="image/y2mate.com - Cairokee  I Thought there was still time  كايروكي  كنت فاكر.mp3" type="audio/ogg">
      </audio>

</div>    
</div>     
<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = ($_POST['first']);
  $mail = ($_POST['email']);
  $cell = ($_POST['phone']);
  $msg = ($_POST['message']);

  $headers = 'from: ' .$mail .'\r\n';
$myEmail ="andria.jesus412@gmail.com";
$subject = "Contact from";
  if(empty($formErrors)){
    
    mail($myEmail,$subject, $msg, $headers);
}
}
?>
    <script src="java/an.js.js"></script>
    <script src="java/bootstrap.bundle.min.js"></script>
<script src="java/aav.js"></script>
  <script src ="java/"></script>
</body>
</html>