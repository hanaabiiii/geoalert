<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css%22%3E">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <style>
        body{
            position: relative;
            width: 1440px;
            height: 1024px;

            background: rgba(255, 232, 194, 0.2);
            border-radius: 35px;
            background-image: url("assets/img/2.svg");
            background-repeat: no-repeat;
            background-size: 100% auto;
            
        }
        a{
            text-decoration:none;
            color:#000000;
        }
        
        .rectangle{
                position: absolute;
                width: 494px;
                height: 343px;
                left: 473px;
                top: 539px;

                background: #FFFFFF;
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                border-radius: 20px;
        }
        .logo{
            position: absolute;
            width: 556px;
            height: 556px;
            left: 442px;
            top: 55px;
        }
        .adminname{
            position: absolute;
            width: 230px;
            height: 90px;
            left: 110px;
            top: 70px;
            

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 900;
            font-size: 60px;
            line-height: 90px;
            

            letter-spacing: 0.1em;

            color: #000000;
        }
        .user{
            position: absolute;
            width: 169px;
            height: 90px;
            left: 110px;
            top: 202px;

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 900;
            font-size: 60px;
            line-height: 90px;
          

            letter-spacing: 0.1em;

            color: #000000;
            
        }
        
    </style>
    
    <img
        src="assets/img/1.svg"
         class="logo"
        />
    <div class="rectangle">
    <div class="adminname">
        <a href="http://localhost/geoalert/public/admin_register" class="fa fa-user-o">ADMIN
        </a>
        
    </div>
    <div class="user">
        <a href="http://localhost/geoalert/public/employee_register" class="fa fa-user-o">USER
        </a>
        
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>