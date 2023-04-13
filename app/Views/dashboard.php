<?php

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<style>
        body {
              margin: 0;
              font-family: "Lato", sans-serif;
              background: rgba(255, 232, 194, 0.2);
            }

            .sidebar {
              margin: 0;
              padding: 0;
              width: 200px;
              background-color: #f1f1f1;
              position: fixed;
              height: 100%;
              overflow: auto;
            }

            .sidebar a {
              display: block;
              color: black;
              padding: 16px;
              text-decoration: none;
            }
            
            .sidebar a.active {
              background-color: #D63533;
              color: white;
            }

            .sidebar a:hover:not(.active) {
              background-color: #555;
              color: white;
            }

            div.content {
              margin-left: 200px;
              padding: 1px 16px;
              height: 1000px;
            }

            @media screen and (max-width: 700px) {
              .sidebar {
                width: 100%;
                height: auto;
                position: relative;
              }
              .sidebar a {float: left;}
              div.content {margin-left: 0;}
            }

            @media screen and (max-width: 400px) {
              .sidebar a {
                text-align: center;
                float: none;
              }
            }
            .logoutstyle{
              margin-top:250px;
              height: auto;
              position: relative;
            }
            

    </style>

</head>

<body>
      <div class="sidebar">
        <img src="assets/img/logo.png" height="187" alt="GeoAlert" class="center">
        <a class="active fa fa-user-o" href="#home">
  <span class="text-black me-3 mb-0"><?php echo isset($user['username']) ? $user['username'] : ''; ?></span>
</a>  
        <a class="#incident fa fa-book" href="http://localhost/geoalert/public/map"  > Incident Reports</a>
        <a class="#events fa fa-calendar-o"> Events</a>
        <a class="#traffic fa fa-car"> Traffic Flow</a>
        
       
        <a class="#logout fa fa-sign-out logoutstyle" href="http://localhost/geoalert/public/logout"> Logout</a>
      </div>

      <div class="content">
        <h2>Responsive Sidebar Example</h2>
        <p>This example use media queries to transform the sidebar to a top navigation bar when the screen size is 700px or less.</p>
        <p>We have also added a media query for screens that are 400px or less, which will vertically stack and center the navigation links.</p>
        <h3>Resize the browser window to see the effect.</h3>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>