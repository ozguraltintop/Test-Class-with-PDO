<?php include_once 'fw/v_form.php'; 

if (isset($_REQUEST['demail']))   {$dmail     = $_REQUEST['demail'];}   else{$dmail  = false;}
if($dmail==1)
{
    echo "<script>
    alert('Mail Gönderildi.');
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Case - Ozgur Altintop</title>
    <link rel="stylesheet" href="app/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="app/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="app/dist/app.css">
    <link rel="stylesheet" href="assets/font/font-awesome.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/icon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/icon.png">
    <script type="text/javascript" src="app/js/func.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style type="text/css">
        .page-title
        {
            background-color:#0C1226;;
        }
    </style>
</head>
<body class="header-fixed main">
        <!-- preloade -->
        <div class="preload preload-container">
            <div class="preload-logo"></div>
        </div>
        <!-- /preload -->
    <div id="wrapper">
        <!-- Header -->
    <?php include 'inc/header.php'; ?>
    <!-- end Header -->
    <?php include 'layout/s1slider.php'; ?>

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