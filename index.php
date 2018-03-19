<?php include('server.php'); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
        include 'partials/header.php';
        
        ?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="jumbotron.css" rel="stylesheet">
<link href="tooltip-viewport.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style_1.css">
    <head>
        <meta charset="UTF-8">
        <title> Work</title>
    </head>
    <body>
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
              <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          
               <form class="navbar-form navbar-right" method="post" action="index.php">
            <div class="form-group">
              <input type="text" placeholder="username" class="form-control" name="username">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-success" title="You Already have an Account" name="signin">Sign in</button>

          </form>
                
             
            <ul class="nav navbar-nav pull-right">
                
                <li><a href="register.php" title="create an Account">Sign up</a></li>
            </ul>   
        </div><!--/.nav-collapse -->

      </div>
    </nav>

    <div class="body">

        <img class="slides" src="images/slides/images-19.jpeg"> 
        <img class="slides" src="images/slides/images-25.jpeg"> 
        <img class="slides" src="images/slides/images-27.jpeg"> 
        <img class="slides" src="images/slides/images-29.jpg">
        <img class="slides" src="images/slides/images-23.jpg">
        <img class="slides" src="images/slides/images-24.jpg">
        
        
        <a class="left carousel-control" onclick="plusIndex(-1)" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
        <a class="right carousel-control" onclick="plusIndex(1)" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
      
 		<?php
        include 'partials/footer.php';
        ?>
    </body>
    
    <script>
            var index = 1;
            function plusIndex(n){
                index = index + n;
                showImage(index);
            }
            showImage(1);
            
          function showImage(n){
              var i;
              var x = document.getElementsByClassName("slides");
              if(n > x.length){index = 1};
              if(n < 1){index = x.length};
              for(i=0;i<x.length;i++)
              {
                  x[i].style.display = "none";
              }
            x[index-1].style.display = "block";
          }
          
          autoSlide();
          function autoSlide(){
              var i;
              var x = document.getElementsByClassName("slides");
              for(i=0;i<x.length;i++)
              {
                  x[i].style.display = "none";
              }
              if(index > x.length){ index = 1};
            x[index-1].style.display = "block";
            index++;
              setTimeout(autoSlide,2500);
          }
    </script>
        
</html>
