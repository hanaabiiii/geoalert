<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        body{
            position: relative;
            width: 1440px;
            height: 1024px;

            background: rgba(255, 232, 194, 0.2);
            border-radius: 35px;
        }

        .login-container .rectangle-div{
            position: absolute;
            width: 558px;
            height: 557px;
            left: 441px;
            top: 250px;

            background: #FFFFFF;
            box-shadow: 0px 19px 40px rgba(0, 0, 0, 0.05);
            border-radius: 20px;
        }
        .vector-art1{
            position: absolute;
            width: 382px;
            height: 377px;
            left: 8px;
            top: 2px;
            
        }
        .login-container .vector-art2{
            position: absolute;
            width: 1448px;
            height: 636px;
            left: -8px;
            top: 556px;
            background: url("assets/img/2.svg");
        }
        .login-container .logintxt-div{
            position: absolute;
            width: 372px;
            height: 54px;
            left: 534px;
            top: 283px;

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 36px;
            line-height: 54px;
            /* identical to box height */

            letter-spacing: 0.1em;

            color: #202020;
        }
        .login-container .usernametxt-div{
            position: absolute;
            width: 121px;
            height: 30px;
            left: 500px;
            top: 364px;

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 30px;
           

            letter-spacing: 0.1em;

            color: #000000;
        }
        .login-container .passwordtxt-div{
            position: absolute;
            width: 115px;
            height: 30px;
            left: 500px;
            top: 483px;

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 30px;
            

            letter-spacing: 0.1em;

            color: #000000;

        }
        .login-container .signuptxt-div{
            position: absolute;
            width: 402px;
            height: 27px;
            left: 519px;
            top: 698px;

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 27px;
           

            letter-spacing: 0.1em;

            color: #000000;

        }
        .login-container .logintxtbox-div{
            box-sizing: border-box;


            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 18px 26px;
            gap: 10px;

            position: absolute;
            width: 430px;
            height: 61px;
            left: 500px;
            top: 409px;

            background: #EEEEEE;
            border: 1px solid #EEEEEE;
            border-radius: 10px;

        }
        .login-container .passwordtxtbox-div{
            


            box-sizing: border-box;

            

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 18px 26px;
            gap: 10px;

            position: absolute;
            width: 430px;
            height: 60px;
            left: 500px;
            top: 525px;

            background: #EEEEEE;
            border: 1px solid #EEEEEE;
            border-radius: 10px;
        }
        .login-container .loginbtn-div{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 0px;
            gap: 10px;

            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            display: flex;
            justify-content: center; 
            align-items: center;
            font-weight: bold;
            font-size: 27px;

            position: absolute;
            width: 252px;
            height: 55px;
            left: 589px;
            top: calc(50% - 55px/2 + 131.5px);

            background: #D63533;
            border-radius: 10px;
        }
    </style>
    <div class="body">
        <img src="assets/img/1.svg" class="img-fluid vector-art1" alt="Responsive image">
    </div>
     
    <div class="login-container">

        <div class="vector-art2"></div>

        <div class="rectangle-div"></div>

        <div class= "logintxt-div">Log into GeoAlert</div>

        <div class="usernametxt-div">Username           
        </div>

        <input type="text" class="logintxtbox-div">

        <div class="passwordtxt-div">Password
        </div>
        <input type="text" class="passwordtxtbox-div">

        <button class="loginbtn-div">Log in</button>
        <input type="button" class="loginbtn-div" value="Log in">

        <div class="signuptxt-div">Forgot Account? Sign up for GeoAlert</div>        
    </div>

    
</body>
</html>