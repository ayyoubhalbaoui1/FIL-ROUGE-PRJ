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
    .left {
        margin-top: -87%;
        float: left;
        margin-left: 47%;
    }

    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {

        /* Force table to not be like tables anymore */


        .left {
            width: 200px;
            float: left;
            margin-left: 2%;

            margin-top: -190%;
        }

        table,
        thead,
        tbody,
        th,
        td,
        tr {
            display: block;
        }
    </style>

</head>

<body>
    <?php include('function.php'); ?>
    <?php include('top.php'); ?>
    <div class="container gallery-container">

        <h1>best places available</h1>

        <p class="page-description text-center">Recommended Places For Your</p>
        <br>
        <br>
        <br>

        <div class="tz-gallery">

            <div class="row">

                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <br>
                        <br>
                        <br>
                        <a class="lightbox" href="../images/Madrid-Jorge-Fernandez-Salas.jpg">
                            <img src="../images/Madrid-Jorge-Fernandez-Salas.jpg" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>Madrid</h3>
                            <p>Madrid, Spain's central capital, is a city of elegant boulevards and expansive, manicured
                                parks such as the Buen Retiro. It’s renowned for its rich repositories of European art,
                                including the Prado Museum’s works by Goya, Velázquez and other Spanish masters. The
                                heart of old Hapsburg Madrid is the portico-lined Plaza Mayor, and nearby is the baroque
                                Royal Palace and Armory, displaying historic weaponry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <br>
                        <br>
                        <br>
                        <a class="lightbox"
                            href="../images/Marrakesh-best-things-to-do-Morocco-Woman-Gloria-Apara-Nomadicchica.com-7.jpg">
                            <img src="../images/Marrakesh-best-things-to-do-Morocco-Woman-Gloria-Apara-Nomadicchica.com-7.jpg"
                                alt="Bridge">
                        </a>
                        <div class="caption">
                            <h3>Marrakesh</h3>
                            <p>Marrakesh, a former imperial city in western Morocco, is a major economic center
                                and home to mosques, palaces and gardens. The medina is a densely packed, walled
                                medieval city dating to the Berber Empire, with mazelike alleys where thriving
                                souks (marketplaces) sell traditional textiles, pottery and jewelry. A symbol of
                                the city, and visible for miles, is the Moorish minaret of 12th-century
                                Koutoubia Mosque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <br>
                        <br>
                        <br>
                        <a class="lightbox" href="../images/moscou.jpg">
                            <img src="../images/moscou.jpg" alt="Tuneel">
                        </a>
                        <div class="caption">
                            <h3>Moscow</h3>
                            <p>Moscow, on the Moskva River in western Russia, is the nation’s cosmopolitan capital. In
                                its historic core is the Kremlin, a complex that’s home to the president and tsarist
                                treasures in the Armoury. Outside its walls is Red Square, Russia's symbolic center.
                                It's home to Lenin’s Mausoleum, the State Historical Museum's comprehensive collection
                                and St. Basil’s Cathedral, known for its colorful, onion-shaped domes.</p>
                        </div>
                    </div>
                </div>



            </div>

        </div>

    </div>


    <br>
    <br>
    <br>
    <div style="height:50px"></div>
    <div style="width:1000px">

        <div class="left">

            <table cellpadding="0" cellspacing="0" width="1000px">
                <tr>
                    <td style="font-size:24px; color:#09F"><b>Direction</b></td>
                </tr>
                <?php


$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px; font-size: 24px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

}
mysqli_close($cn);
?>

            </table>

        </div>
    </div>



    </div>

    <div style="clear:both"></div>

    <?php include('bottom.php'); ?>
</body>
<script>
baguetteBox.run('.tz-gallery');
</script>

</html>