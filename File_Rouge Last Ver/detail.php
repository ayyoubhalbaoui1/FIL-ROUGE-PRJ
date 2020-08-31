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
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

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


    <style>
    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {

        /* Force table to not be like tables anymore */
        .image1 img {

            width: 100px;
            height: 100px;
            /* border-style: none; */
            margin-left: -120%;
            /* margin-top: 6px; */
        }

        .image2 img {

            width: 100px;
            height: 100px;
            /* border-style: none; */
            margin-left: -121%;
            /* margin-top: -150px; */
        }

        .image3 img {

            width: 100px;
            height: 100px;
            /* border-style: none; */
            margin-left: -124%;
            /* margin-top: -101px; */
        }

        td {
            float: left;
            margin-left: 10px;
        }


        .headingText {
            float: left;
            /* margin-left: 10%; */
            margin-top: -5%;
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
    <div style="height:50px"></div>
    <div style="width:1000px; margin:auto">

        <div style="width:200px; font-size:18px; color:#09F; float:left">

            <table cellpadding="0" cellspacing="0" width="1000px">
                <tr>
                    <td style="font-size:20px; color:#09F"><b>Category</b></td>

                </tr>
                <?php

$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr ><td  style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";

}

?>

            </table>

        </div>

        <div style="width:800px; float:left">
            <table cellpadding="0px" cellspacing="0" width="1000px">
                <tr>
                    <td class="headingText">View Offer</td>
                </tr>
                <tr>
                    <td class="paraText" width="900px">
                        <table cellpadding="0" cellspacing="0" width="900px" border="0">
                            <tr>
                                <td>

                                    <table border="0" width="600px" height="400px" align="center">
                                        <?php

$s="select * from offer,category,subcategory where offer.category=category.cat_id and offer.subcategory=subcategory.subcatid and offer.offerid='" . $_GET["pid"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
$data=mysqli_fetch_array($result);
mysqli_close($cn);
?>



                                        <tr>
                                            <td class="image1"><img src="Admin/offerimages/<?php echo $data[5];?>"
                                                    width="200px" height="200px" /></td>

                                            <td class="image2" style="padding-left:15px"><img
                                                    src="Admin/offerimages/<?php echo $data[6];?>" width="200px"
                                                    height="200px" /></td>

                                            <td class="image3" style="padding-left:15px"><img
                                                    src="Admin/offerimages/<?php echo $data[7];?>" width="200px"
                                                    height="200px" /></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3"><span class="middletext">Offer
                                                    Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[1];?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" height="90px"><span
                                                    class="middletext">Category:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <?php echo $data[10];?>
                                                <br />
                                                <span
                                                    class="middletext">Subcategory:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <?php echo $data[12];?>
                                                <br />
                                                <span class="middletext"
                                                    style="color: tomato;">Price:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <?php echo $data[4];?> MAD
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <p><?php echo $data[8];?></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="3" height="50px"><a
                                                    href="enquiry.php?pid=<?php echo $data[0];   ?>"><input
                                                        type="button" value="Enquiry" name="sbmt" /></a></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

        </div>

    </div>

    <div style="clear:both"></div>

    <?php include('bottom.php'); ?>
</body>


</html>