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
<title>login up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-card-4">
  <div class="w3-container w3-blue">
    <h2>login up</h2>
  </div>
  <form class="w3-container" action="/action_page.php">
  <p>      
    <label class="w3-text-blue"  max="10" main="3" ><b>name</b></label>
    <input class="w3-input w3-border w3-sand" name="name" type="text"></p>
    <p>      
    <p>      
    <label class="w3-text-blue"><b>email</b></label>
    <input class="w3-input w3-border w3-sand" name="email" type="text"></p>
    <p>      
    <label class="w3-text-blue" max="10" main="3"  ><b>password</b></label>
    <input class="w3-input w3-border w3-sand" name="password" type="text"></p>
    <p>
    <button class="w3-btn w3-blue" name="send">login</button></p>
  </form>
</div>
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
        $uName =filter_var($_POST["name"],FILTER_SANITIZE_STRING);
    $uEmail =filter_var($_POST["email"],FILTER_SANITIZE_STRING) ;
    $uDate =filter_var($_POST["password"],FILTER_SANITIZE_STRING);
    $uSend =$_POST["send"];
    $errors=[];



 if(empty($uName)){
    $errors[]="name";
}elseif(strlen($uName)>100){
    $errors[]="nuber";
}
if(empty($uEmail)){
    $errors[]="email";
}elseif( filter_var($uEmail,FILTER_VALIDATE_EMAIL)==false){
$errors[]="not is ";
}
$stm="SELECT email FROM patients WHERE email ='$uEmail'";
$q=$comm->prepare($stm);
$q->execute();
$data=$q->fetch();
if($data){
    $errors[]="error";
}
if(empty($errors)){   
    $uDate=password_hash($uDate,PASSWORD_DEFAULT);
$query = "INSERT INTO patients(name,email,password)VALUE('$uName','$uEmail','$uDate')";
$comm->prepare($query)->execute();
header('location:login.php');
    $_POST['name']='';
    $_POST['email']='';
    
 $_SESSION['user']=[
    "name"=>$uName,
    "email"=>$uEmail,
 ];

}else{
    $errors[]="error"; 
}

    };


    ?>
   
