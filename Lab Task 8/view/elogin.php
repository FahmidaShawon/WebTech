<!DOCTYPE html>
<?php   require_once "../javascript/login.php";
//include("../model/header.php"); 
?>
<html lang="en" dir="ltr">
  <head>
    <?php 
        include "lognav.php";
      ?> 
    <style >
      .error {color: #FF0000;}
    </style>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/elogin.css">
  </head>
  <body>
    <form method="post" action="../controller/elogincontroller.php">

      </div> 

           <div align="center";>
           <fieldset style="width:25%;"> 

          <legend align='center'> <h2> Employee LOGIN </h2> </legend>
          <form name="myForm" action="" onsubmit="return validateForm()" method="post">
          
             <b> <label for="userename"> User Name  <span style="color: rgb(255, 255, 255);">*</span>: </label> </b> 
             <input type="text" onkeydown="checkUsername()" onblur="checkUsername ()" placeholder="Enter Username" name="username" id="username">
    <span class="error" id="nameErr">* <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
               <br><br>
              
                <b> <label for="password"> Password <span style="color: rgb(255, 255, 255);">**</span>: </label> </b>
               <input type="text" onkeydown="checkPassword()" onblur="checkPassword()" placeholder="Enter Password" name="password" id="password">
    <span class="error" id="passwordErr">* <?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
                <br><br>
                
             <div>
                <hr>
                <input type="checkbox"  name="remember" value="remembered"><label for="remember">Remember Me</label><br>
                <input type="submit" name="submit" value="Login" echo $Login Successful;> 
                <meta ><a href ="forgotpassword.php">Forgot Password? </a></meta>
   
             </div>

          
    </form>
  </body>
  <?php  
  ?>
</html>