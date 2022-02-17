 <!-- 
   search about =>require |include_once require_once
   CRUE => create recoard update delete
   regex
 -->
 <?php session_start(); ?>
 <?php include "config.php" ?>
 <?php
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // to check this data in database or dont
    $email = $_POST['adminemail'];
    $password = sha1($_POST['adminpass']);
    $stmt =  $con->prepare("SELECT * FROM `users` WHERE `email`=? AND `password`=? AND `role`!=2");
    $stmt->execute(array($email, $password));
    $count = $stmt->rowCount();
    $user = $stmt->fetch();
    if ($count == 1) {
      $_SESSION['ID'] = $user['id'];
      $_SESSION['USERNAME'] = $user['username'];
      $_SESSION['EMAIL'] = $user['email'];
      $_SESSION['ROLE'] = $user['role'];
      header("location:dashboard.php");
      exit();
    } else {
      echo "sorry dont have a permission";
    }

    // echo"<pre>";
    // print_r($user);
    // echo"</pre>";
  }





  ?>
  <?php
  if(isset($_GET['lang']) && $_GET['lang'] == 'arb'){
    include"lang/arb.php";
    $_SESSION['LANG'] = $_GET['lang'];
  }else{
    include"lang/eng.php";
  }
  
  ?>
 <?php include "include/header.php" ?>
 <div class="container" >
   
   <h1 class="text-center">admin panel</h1>
   <a href="?lang=eng">English</a> |<a href="?lang=arb">عربي</a>
   <form method="post" action="<?php $_SERVER['PHP_SELF']?>"> 
     <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label"><?=$lang['email']?></label>
       <input type="email" class="form-control" name="adminemail">
       <div id="emailHelp" class="form-text"></div>
     </div>
     <div class="mb-3">
       <label for="exampleInputPassword1" class="form-label"><?=$lang['password']?></label>
       <input type="password" class="form-control" name="adminpass">
     </div>

     <button type="submit" class="btn btn-primary"><?=$lang['login']?></button>
   </form>
 </div>

 <?php include "include/footer.php" ?>