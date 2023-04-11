<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/> 
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <title>Admin Registration</title>
</head>

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

    .image{
        position: absolute;
        width: 382px;
        height: 377px;
        left: 8px;
        top: 2px;
    }

    .rectangle{
        width: 598px;
        position: absolute;
        height: 550px;
        left: 473px;
        top: 180px;

        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
    }

    .p1{
        position: absolute;
        left: 105px;
        top: 30px;

        font-family: Poppins;
        font-weight: Bold;
        font-style: normal;
        font-weight: 700;
        font-size: 36px;
        line-height: 54px;
        letter-spacing: 0.1em;
    }
    
    .f1{
        position: absolute;
        left: 110px;
        top: 85px;

        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 27px;
        letter-spacing: 0.1em;
    }

    .f2{
        position: absolute;
        width: 470px;
        top: 85px;
        left: 220px;
        text-align: center;
        
        font-family: 'Nunito';
        font-style: normal;
        font-weight: 400;
        font-size: 18px;
        line-height: 27px;
        letter-spacing: 0.1em;
    }

    .label1{
        position: absolute;
        top: 165px;
        left: 145px;

        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 30px;
        /* identical to box height */
        letter-spacing: 0.1em;
    }

    .label2{
        position: absolute;
        top: 255px;
        left: 145px;

        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 30px;
        /* identical to box height */
        letter-spacing: 0.1em;
    }

    .label3{
        position: absolute;
        top: 340px;
        left: 145px;

        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 30px;
        /* identical to box height */
        letter-spacing: 0.1em;
    }

    .form1{
        position: absolute;
        top: 195px;
        left: 140px;
        width: 300px;
        height: 40px;        
    }

    .form2{
        position: absolute;
        top: 285px;
        left: 140px;
        width: 300px;
        height: 40px;
    }

    .form3{
        position: absolute;
        top: 370px;
        left: 140px;
        width: 300px;
        height: 40px;
    }


    .btndsgn{
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 0px;
        gap: 10px;
        position: absolute;
        width: 252px;
        height: 55px;
        left: 170px;
        top: 450px;


        border: none;
        background-color: #D63533 !important; 
        color: white !important;
        font-size: 18px;
        font-family: 'Poppins';
        font-style: ;
        font-weight: 700;
        transition: none !important;
        }

</style>

<body>

    <img src="assets/img/1.svg" class="img-fluid image" alt="Responsive image">

    <div class="rectangle">
        <div class= "text-center">
        <p class="p1">Create an Account</p>
        </div>
        <div class='text-center'>
            <label class="f1">If you have already an account ?</label>
            <a class="f2" href="<?= site_url('login') ?>">Login Now</a>
        </div>

        <form>
        <div class="form-group">
            <label for="AdminID" class="label1">Admin ID</label>
            <input type="text" class="form-control form1 fa fa-user fa-sharp" id="AdminID" placeholder="&#xf007; Admin ID">
        </div>

        <div class="form-group">
            <label for="uname" class="label2">Username</label>
            <input type="text" class="form-control form2 fa fa-user" id="uname" placeholder="&#xf007; Username">
        </div>

        <div class="form-group">
            <label for="pass" class="label3">Password</label>
            <input type="text" class="form-control form3 fa fa-key" id="pass" placeholder="&#xf084; Password">
        </div>
        
        <button class="btn btn-lg btndsgn" type="submit" name="login">CREATE ACCOUNT</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>