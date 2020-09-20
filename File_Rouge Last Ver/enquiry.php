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
    body {
        font-family: "Open Sans", sans-serif;
        line-height: 1.25;
    }

    table {
        border: 1px solid #ccc;
        border-collapse: collapse;
        margin: 0;
        padding: 0;
        width: 100%;
        table-layout: fixed;
    }

    table caption {
        font-size: 1.5em;
        margin: .5em 0 .75em;
    }

    table tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        padding: .35em;
    }

    table th,
    table td {
        padding: .625em;
        text-align: center;
    }

    table th {
        font-size: .85em;
        letter-spacing: .1em;
        text-transform: uppercase;
    }

    @media (min-width: 1200px) {
        .container {
            width: 856px;
        }
    }
    </style>

</head>

<body>
    <?php include('function.php'); ?>
    <?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into enquiry(Offerid,Name,Gender,Mobileno,Email,NoofDays,Child,Adults,Message,Statusfield) values('" . $_REQUEST["pid"] ."','" . $_POST["t1"] ."','" . $_POST["r1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."','" . $_POST["t5"] ."','" . $_POST["t6"] ."','" . $_POST["t7"] ."','Pending')";	
	
	
		mysqli_query($cn,$s);
	
	echo "<script>alert('Record Save');</script>";
}
?>

    <?php include('top.php'); ?>
    <br>
    <br>
    <br>
    <?php include('slider.php'); ?>


    <br>

    <div class="container">
        <div class="row">

            <div>
                <table cellpadding="0px" cellspacing="0">
                    <tr>
                        <td class="headingText">Enquiry</td>
                    </tr>
                    <tr>
                        <td class="paraText" width="900px">
                            <table cellpadding="0" cellspacing="0">
                                <td>

                                    <table border="0" ; width="600px" height="400px" align="center">
                                        <?php

$s="select * from offer,category,subcategory where offer.category=category.cat_id and offer.subcategory=subcategory.subcatid and offer.offerid='" . $_GET["pid"] ."'";

$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
$data=mysqli_fetch_array($result);
mysqli_close($cn);
?>

                                        <form method="post" enctype="multipart/form-data">
                                            <tr>
                                                <td colspan="3" class="middletext">offer
                                                    Id:&nbsp;&nbsp;&nbsp;<?php echo $data[0];?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="middletext">Offer
                                                    Name:&nbsp;&nbsp;&nbsp;<?php echo $data[1];?></td>
                                            </tr>
                                            <tr>
                                                <td class="lefttxt">Name:</td>
                                                <td><input class="form-control" type="text" name="t1" required
                                                        pattern="[a-zA-z1 _]{3,50}"
                                                        title="Please Enter Only Characters and numbers between 1 to 50 for Name" />
                                                </td>
                                            </tr><br />
                                            <tr>
                                                <td class="lefttxt">Gender:</td>
                                                <td><input class="form-check-input" type="radio" name="r1" value="Male"
                                                        checked="checked" /> Male
                                                    <br>
                                                    <input class="form-check-input" type="radio" name="r1"
                                                        value="Female" />
                                                    Female <br>
                                                </td>
                                            </tr><br />
                                            <tr>
                                                <td class="lefttxt">Mobile Number.</td>
                                                <td><input class="form-control" type="text" name="t2" required
                                                        pattern="[0-9]{10,12}"
                                                        title="Please Enter Only numbers between 10 to 12 for Mobile No" />
                                                </td>
                                            </tr><br />
                                            <tr>
                                                <td class="lefttxt">Email:</td>
                                                <td><input class="form-control" type="email" name="t3" required />
                                                </td>
                                                <td><br />
                                            <tr>
                                                <td class="lefttxt">Number of Days:</td>
                                                <td><input class="form-control" type="number" name="t4" required
                                                        pattern="[1 _]{1,20}"
                                                        title="Please Enter Only numbers between 1 to 20 for No. oF Days" />
                                                </td>
                                                <td><br />
                                            <tr>
                                                <td class="lefttxt">Number of Children:</td>
                                                <td><input class="form-control" type="number" name="t5" required
                                                        pattern="[1 _]{1,10}"
                                                        title="Please Enter Only numbers between 1 to 10 for Children" />
                                                </td>
                                                <td><br />
                                            <tr>
                                                <td class="lefttxt">Number of Adults:</td>
                                                <td><input class="form-control" type="number" name="t6" required
                                                        pattern="[1 _]{1,20}"
                                                        title="Please Enter Only numbers between 1 to 20 for No.Of Adults" />
                                                </td>
                                                <td><br />
                                            <tr>
                                                <td class="lefttxt">Reservation Message:</td>
                                                <td><textarea class="form-control" name="t7"
                                                        required="required" /></textarea></td>
                                                <td><br />
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td><input type="submit" class="btn btn-primary" value="Submit"
                                                        name="sbmt" /></td>
                                            </tr>

                                        </form>
                                </td>
                    </tr>
                </table>
                </td>
                </table>
                </td>
                </tr>
                </table>

            </div>

        </div>
    </div>


    <div style="clear:both"></div>
    <div style="clear:both"></div>



</body>
<br>
<?php include('bottom.php'); ?>

</html>