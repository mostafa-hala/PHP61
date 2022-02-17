<!doctype html>
<html 
<?php if(isset($_GET['lang']) && $_GET['lang']=='arb'):?>
    lang="arb" dir="rtl"
<?php else:?>
    lang="eng" dir="ltr"
<?php endif ?>

>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(isset($_GET['lang']) && $_GET['lang']=='arb'):?>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
    <?php else:?>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php endif ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css"> 


    <title>Hello, world!</title>
  </head>
  <body>

  