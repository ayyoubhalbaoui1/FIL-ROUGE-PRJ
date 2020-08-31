<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>

<head>
    <title>My-tour bootstrap Design website | Home :: w3layouts</title>
    <link
        href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
        rel='stylesheet' type='text/css'>

    <link href="style.css" rel="stylesheet" type="text/css" />

    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
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


    <?php include('function.php'); ?>
    <?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into category(Cat_name) values('" . $_POST["t1"] ."')";
	mysqli_query($cn,$s);
	
	echo "<script>alert('Record Save');</script>";
}
?>



    <?php include('top.php'); ?>



    <div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
        <div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
            <?php include('left.php'); ?>
        </div>
        <div class="col-sm-9">




            <form method="post">
                <table border="0" width="90%" height="300px" align="center" class="tableshadow">
                    <tr>
                        <td class="toptd">View Offer</td>
                    </tr>
                    <tr>
                        <td align="center" valign="top" style="padding-top:10px;">
                            <table border="0" align="center" width="95%">
                                <tr>
                                    <td style="font-size:15px; padding:5px; font-weight:bold;">ID</td>
                                    <td style="font-size:15px; padding:5px; font-weight:bold;">Offer Name</td>
                                    <td style="font-size:15px; padding:5px; font-weight:bold;">Direction</td>
                                    <td style="font-size:15px; padding:5px; font-weight:bold;">SubDirection </td>
                                    <td style="font-size:15px; padding:5px; font-weight:bold;">Price</td>
                                    <td style="font-size:15px; padding:5px; font-weight:bold;">Pic1</td>
                                    <td style="font-size:15px; padding:5px; font-weight:bold;">Pic2</td>
                                    <td style="font-size:15px; padding:5px; font-weight:bold;">Pic3</td>
                                </tr>

                                <?php

$s="select * from offer";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'>$data[0]</td>
		<td style=' padding:5px;'>$data[1]</td>
		<td style=' padding:5px;'>$data[2]</td>
		<td style=' padding:5px;'>$data[3]</td>
		<td style=' padding:5px;'>$data[4]</td>
		<td style=' padding:5px;'><IMG src='offerimages/$data[5]' style='height:50PX' /></td>
		<td style=' padding:5px;'><IMG src='offerimages/$data[6]' style='height:50PX' /></td>
		<td style=' padding:5px;'><IMG src='offerimages/$data[7]' style='height:50PX' /></td></tr>";

}


?>

                            </table>
                        </td>
                    </tr>
                </table>

            </form>



        </div>


    </div>
</body>
<br>
<br>
<br>
<?php include('bottom.php'); ?>


</html>