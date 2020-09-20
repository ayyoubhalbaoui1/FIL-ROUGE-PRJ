<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
        rel='stylesheet' type='text/css'>
    <link href="stylecss.css" rel='stylesheet' type='text/css' />
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/gallery-clean.css">




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
    <style>
    .item {
        padding-left: 5px;
        padding-right: 5px;
    }

    .item-card {
        transition: 0.5s;
        /* cursor: pointer; */
    }

    .item-card-title {
        font-size: 15px;
        transition: 1s;
        /* cursor: pointer; */
    }

    .item-card-title i {
        font-size: 15px;
        transition: 1s;
        /* cursor: pointer; */
        color: #ffa710
    }

    .card-title i:hover {
        transform: scale(1.25) rotate(100deg);
        color: #18d4ca;

    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.3);
    }

    .card-text {
        height: 80px;
    }

    .card::before,
    .card::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        transform: scale3d(0, 0, 1);
        transition: transform .3s ease-out 0s;
        background: rgba(255, 255, 255, 0.1);
        content: '';
        pointer-events: none;
    }

    .card::before {
        transform-origin: left top;
    }

    .card::after {
        transform-origin: right bottom;
    }

    .card:hover::before,
    .card:hover::after,
    .card:focus::before,
    .card:focus::after {
        transform: scale3d(1, 1, 1);
    }

    .card {
        margin: 0 auto;
        /* Added */
        float: none;
        /* Added */
        margin-bottom: 10px;
        /* Added */
        background-color: #F5F5F5;
        margin-top: -20%;




    }

    .card img {

        width: 100%;
        height: 15rem;

        object-fit: cover;


    }

    @media only screen and (max-width: 500px) {
        .card {
            margin-top: 6px;
            margin-bottom: 38px;
            margin-right: 87px;
        }
    }
    </style>



</head>

<body>
    <?php include('function.php'); ?>
    <?php include('top.php'); ?>
    <br>
    <br>
    <br>


    <?php include('slider.php'); ?>
    <div class="container gallery-container">

        <h1>Offer Details</h1>






        <div style="height:50px"></div>
        <div style="width:1000px">

            <!-- <div class="left">

    <table cellpadding="0" cellspacing="0" width="1000px">
        <tr>
            <td style="font-size:30px; color:#09F"><b>Direction</b></td>
        </tr> -->

            <div class="fixed-top">
                <table class="table">
                    <tr class="active">
                        <th style="border: none;" scope="row">Direction</th>
                        <?php

$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
    echo "<tr><td style=' border: none; font-weight: 800;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";

}

?>

                </table>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php

$s="select * from offer,category,subcategory where offer.category=category.cat_id and offer.subcategory=subcategory.subcatid and offer.offerid='" . $_GET["pid"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
$data=mysqli_fetch_array($result);
mysqli_close($cn);
?>






            <div class="card shadow item-card card-block" style="width: 30rem;">
                <img class="card-img-top" src="Admin/offerimages/<?php echo $data[5];?>">
                <br>
                <img class="card-img-top" src="Admin/offerimages/<?php echo $data[6];?>">
                <br>
                <img class="card-img-top" src="Admin/offerimages/<?php echo $data[7];?>">
                <div class="card-body">
                    <br>
                    <h5 class="card-title"> Offer Name :
                        <?php echo $data[1];?>
                        </td>
                    </h5>
                    <h5 class="card-title"> Direction :
                        <?php echo $data[10];?>
                        </td>
                    </h5>
                    <h5 class="card-title"> SubDirection :
                        <?php echo $data[12];?>
                        </td>
                    </h5>
                    <h5 class="card-title" style="color: tomato;">Price :
                        <?php echo $data[4];?> MAD
                        </td>
                    </h5>
                    <p><?php echo $data[8];?></p>
                    <br>
                    <a href="enquiry.php?pid=<?php echo $data[0];   ?>">
                        <button class="btn btn-primary">Enquiry</button>
                    </a>
                    <br>
                    <br>
                </div>
            </div>
            <br>
            <br>
            <br>




        </div>

    </div>

    <div style="clear:both"></div>

    <?php include('bottom.php'); ?>
</body>


</html>