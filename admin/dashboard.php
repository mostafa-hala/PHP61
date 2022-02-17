
<?php session_start(); ?>
<?php include "config.php" ?>
<?php
if(isset($_SESSION['LANG']) && $_SESSION['LANG']=='arb'){
    include "lang/arb.php";
}else{
    include "lang/eng.php";
}

?>
<?php include "include/header.php" ?>
<?php include "include/navbar.php" ?>









<?php include "include/footer.php" ?>