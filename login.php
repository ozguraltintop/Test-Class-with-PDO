<?php include_once 'fw/v_form.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Ozgur Altintop</title>
    <link rel="stylesheet" href="app/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="app/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="app/dist/app.css">
    <link rel="stylesheet" href="assets/font/font-awesome.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/icon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/icon.png">
    <script type="text/javascript" src="app/js/func.js"></script>
    <style type="text/css">
        .page-title
        {
            background-color:#0C1226;;
        }
        label {
            font-weight: 600;
            color: #666;
        }
        
        .box8{
          box-shadow: 0px 0px 5px 1px #999;
        }
        .mx-t3{
          margin-top: -3rem;
        }

    </style>
</head>
<body class="header-fixed main">
        <div class="preload preload-container">
            <div class="preload-logo"></div>
        </div>
 
    <div id="wrapper">
    
    <?php include 'inc/header.php'; ?>
   
        <div class="container mt-3" style="padding-top:150px;border-bottom: 1px solid gray;">
       <div id="errmsg" style="color:red" align="center">
        <?php 
       if(isset($_REQUEST['ok']))
       {
        echo '<b style="color:red">Kullanıcı Adı ve ya Şifrenizi kontrol ediniz.</b>';
       }
       else
       {
        echo '<b style="color:blue">Login</b>';
       }
        ?></div>
         <form method="post" action="function.php">
            <div class="row jumbotron box8">
             
              <div class="col-sm-6 form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Giriniz" required>
              </div>
              <div class="col-sm-6 form-group">
                <label for="pass">Password</label>
                <input type="Password" name="password" class="form-control" id="pass" placeholder="Sifrenizi Girin." required>
              </div>
              <br><br>
              <div class="col-sm-12 form-group mb-0">
                <input class="btn btn-primary float-right" value="Login" type="submit" name="btnLogin">
              </div>

            </div>
          </form>
        </div>

    <?php include 'inc/footer.php'; ?>
    <?php include 'layout/popup.php'; ?>

   
    </div>
    <a id="scroll-top"></a>
    <script type="text/javascript">        
    $('#dogrulama').click(function(){
    alert('sa');
    });
    </script>
    <script src="app/js/jquery.min.js"></script>
    <script src="app/js/bootstrap.min.js"></script>
    <script src="app/js/swiper-bundle.min.js"></script>
    <script src="app/js/swiper.js"></script>
    <script src="app/js/app.js"></script>
    <script src="app/js/jquery.easing.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script src="app/js/parallax.js"></script>
     <script src="app/js/jquery.magnific-popup.min.js"></script>
</body>
</html>