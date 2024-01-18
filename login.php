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
<link rel="stylesheet" href="css/web.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >

<!DOCTYPE html>
<html>
<title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-card-4">
  <div class="w3-container w3-blue">
    <h2>login</h2>
  </div>
  <form class="w3-container" action="/action_page.php">
  <p>      
    <label class="w3-text-blue"><b>name</b></label>
    <input class="w3-input w3-border w3-sand" name="name" type="text"></p>
    <p>      
    <p>      
    <label class="w3-text-blue"><b>email</b></label>
    <input class="w3-input w3-border w3-sand" name="email" type="text"></p>
    <p>      
    <label class="w3-text-blue"><b>password</b></label>
    <input class="w3-input w3-border w3-sand" name="password" type="text"></p>
    <p>
    <button class="w3-btn w3-blue">login</button></p>
  </form>
</div>

</body>
</html> 

<script src="java/an.js.js"></script>
    <script src="java/bootstrap.bundle.min.js"></script>
<script src="java/aav.js"></script>
  <script src ="java/"></script>
</body>
</html>
<?php
    session_start();
    
    if(isset($_POST['send'])){
        include 'conn-db.php';
    $uEmail =filter_var($_POST["email"],FILTER_SANITIZE_STRING) ;
    $uDate =filter_var($_POST["password"],FILTER_SANITIZE_STRING);
    $uSend =$_POST["send"];
    $errors=[];


if(empty($uEmail)){
    $errors[]="email";
}

if(empty($errors)){   
    $stm="SELECT * FROM patients WHERE  email ='$uEmail'";
    $q=$comm->prepare($stm);
    $q->execute();
    $data=$q->fetch();
    if(!$data){
        $errors[]="error login";
    }else{
        $_SESSION['user']=[
            "name"=>$data['name'],
            "email"=>$uEmail,
        ];
      

    }
    header('location:profile.php');
    };
};
    ?>



  