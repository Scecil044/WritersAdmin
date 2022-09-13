<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <title>wEB DEVELOPMENT IS FUN</title>
  </head>
  <body>
       <nav>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Services</a></li>
        <?php if(isset($_SESSION['user_id'])){?>
        <li class="right"><a href="">Logout</a></li>
        <li class="right"><a href="" class="active"><?php echo $_SESSION['user_name'];?></a></li>
        <?php
    }else{
    	?>
    	<li class="right"><a href="">Signup</a></li>
        <li class="right"><a href="" class="active">Login</a></li>
        <?php
    }
    ?>
      </ul>
    </nav>
