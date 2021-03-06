<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Note: khai báo đường dẫn tới components của admin -->
        <?php $COMPONENT_URL = "view/base/client/components/"?>
        <?php global $APP_URL; ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Home</title>
        <link href="public/frontend/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
        <link href="public/frontend/fonts/elegantIcon/elegantIcon.css" type="text/css" rel="stylesheet">
        <link href="public/frontend/fonts/Linearicons-Free/Linearicons-Free.css" type="text/css" rel="stylesheet">
        <link href="public/frontend/css/owl.carousel.min.css" type="text/css" rel="stylesheet">
        <link href="public/frontend/css/main.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="wrap">
            <a href="" title="" class="icon-cart" data-toggle="modal" data-target="#pu-cart">
                <i class="fa fa-shopping-cart"></i>
                <span>1</span>
            </a>
            <?php include "{$COMPONENT_URL}/header.php"; ?>
            <!-- Note: đổ dữ liệu các trang -->
            <?php
                echo $this->content;
            ?>
            <?php include "{$COMPONENT_URL}/new-letter.php"; ?>
            <?php include "{$COMPONENT_URL}/footer.php"; ?>
            
        </div>
        <?php include "{$COMPONENT_URL}/popup-login.php"; ?>
        <?php include "{$COMPONENT_URL}/popup-cart.php"; ?>

        <script src="public/frontend/js/jquery.js" type="text/javascript"></script>
        <script src="public/frontend/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/frontend/js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="public/frontend/js/wow.min.js" type="text/javascript"></script>
        <script src="public/frontend/js/scrollspy.js" type="text/javascript"></script>
        <script src="public/frontend/js/jquery.sticky-kit.js" type="text/javascript"></script>
        <script src="public/frontend/js/script.js" type="text/javascript"></script>
    </body>

</html>
