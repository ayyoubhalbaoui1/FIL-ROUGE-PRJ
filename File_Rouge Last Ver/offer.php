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
    table {
        width: 100%;
        border-collapse: colapse;

    }

    /* Zebra striping */
    tr:nth-of-type(odd) {
        /* background: #eee; */
    }

    th {
        /* background: #333; */
        color: white;
        font-weight: bold;
    }


    td,
    th {
        padding: 6px;
        text-align: left;
    }

    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {

        /* Force table to not be like tables anymore */
        .image {

            /* height: 150px; */
            width: 100%;
            border-style: none;
        }

        button {
            margin-left: -26px;
        }

        b {
            float: left;
            margin-left: 10px;
            margin-left: -94px;
        }

        td a {
            margin-left: 27px;
        }

        .headingText {
            margin-top: -38px;
            margin-left: -138%;



        }

        .paraText {
            margin-left: -746px;
            margin-top: 50px;
        }

        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
        }

        /* Hide table headers (but not display: none;, for accessibility) */
        thead tr {
            position: absolute;
            top: -9999px;
            left: -9999px;
        }

        tr {
            /* border: 1px solid #ccc; */
        }

        td {
            /* Behave  like a "row" */
            border: none;
            /* border-bottom: 1px solid #eee; */
            position: relative;
            padding-left: 50%;
            font-size: 15px;
        }

        td:before {
            /* Now like a table header */
            position: absolute;
            /* Top/left values mimic padding */
            top: 6px;
            left: 6px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <?php include('function.php'); ?>
    <?php include('top.php'); ?>


    <br>
    <br>
    <br>
    <div style="height:50px"></div>
    <div style="width:1000px; margin:auto">

        <div style="width:200px; float:left">

            <table cellpadding="0" cellspacing="0" width="1000px">
                <tr>
                    <td style="font-size:30px; color:#09F"><b>Category</b></td>
                </tr>
                <?php

$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";

}

?>

            </table>

        </div>

        <div style="width:800px; float:left">
            <table cellpadding="0px" cellspacing="0" width="1000px">
                <tr>
                    <td class="headingText">Offer</td>
                </tr>
                <tr>
                    <td class="paraText" width="900px">




                        <table cellpadding="0" cellspacing="0" width="900px">


                            <?php
$s="select * from offer where offer.subcategory='" . $_GET["subcatid"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
while($data=mysqli_fetch_array($result))
{
	
	if($n%3==0)
	{
	?>



                            <tr>
                                <?php

	}?>
                                <td>

                                    <table border="0" width="100px">


                                        <tr>
                                            <td class="image"><img src="Admin/offerimages/<?php echo $data[5];?>"
                                                    width="250px" height="250px" /></td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td align="center"
                                                style="background-color:#FFF; font-family: 'Open Sans', sans-serif;   color:#333">
                                                Name :
                                                <?php echo $data[1]; ?></td>
                                        </tr>
                                        <td align="center"
                                            style="background-color:#FFF; font-family: 'Open Sans', sans-serif;  color:#333">
                                            <a href="detail.php?pid=<?php echo $data[0];   ?>">
                                                <button class="btn btn-primary">View Details</button>
                                            </a>
                                        </td>
                            </tr>
                        </table>
                    </td>
                    <?php

if($n%3==2)
{
?>
                </tr>

                <?php
}
$n=$n+1;
}
mysqli_close($cn);
?>

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