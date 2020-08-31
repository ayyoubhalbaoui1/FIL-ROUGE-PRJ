<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
        rel='stylesheet' type='text/css'>
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <!--js-->
    <script src="js/jquery.min.js"></script>

    <!--/js-->

</head>

<body>
    <!--header-->

    <?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>


    <?php include('top.php'); ?>



    <div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
        <div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
            <?php include('left.php'); ?>
        </div>
        <div class="col-sm-9" align="center">
            <h1>WELCOME TO ADMIN PANEL</h1>
        </div>


    </div>
    <?php include('bottom.php'); ?>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>


</html>