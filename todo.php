<?php include('server.php'); 

      // if user is not logged in, they cannot access this page
      if (empty($_SESSION['username'])){
        header('location: index.php');
      }

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="style_1.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="jumbotron.css" rel="stylesheet">
<link href="tooltip-viewport.css" rel="stylesheet">
        
        <title>sign up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body bgcolor="#FFFF99">
        
              <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand">My Website</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="active"><a href="#Activities">Activities</a></li>
            <li><a href="#Todo_LIst">Todo List</a></li>
          </ul>
          
              <ul class="nav navbar-nav pull-right">

                <div class="content">

                <?php if (isset($_SESSION['success'])): ?>
                  <div class="success">
                    <h3>
                      <?php
                          
                          unset($_SESSION['success']);
                      ?>
                    </h3>
                  </div>
                <?php endif ?> 

                <?php if (isset($_SESSION['username'])): ?>
                  <li style="color: white;">Welcome  <strong style="color: white;"><?php echo $_SESSION['username']; ?></strong></li>
                  <li><a href="index.php?logout='1'" style="color: red;">Logout</a></li>
                <?php endif ?>
              </div>
              </ul>
        </div><!--/.nav-collapse -->

      </div>
    </nav>
         

  

    </body>
</html>
