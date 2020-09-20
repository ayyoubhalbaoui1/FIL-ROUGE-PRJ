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
    .borderless table {
        border-top-style: none;
        border-left-style: none;
        border-right-style: none;
        border-bottom-style: none;
    }
    </style>

</head>

<body>
    <?php include('function.php'); ?>
    <?php include('top.php'); ?>
    <br>
    <br>
    <br>
    <div class="container gallery-container">

        <h1>best places available</h1>
        <p class="page-description text-center">Recommended Places For Your</p>






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
	
		echo "<tr><td style=' border: none;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";

}
mysqli_close($cn);
?>

                </table>

            </div>
        </div>



    </div>



    <div class="tz-gallery">

        <div class="row">


            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">

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
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="../images/istanbul-night.jpg">
                        <img src="../images/istanbul-night.jpg" alt="Tuneel">
                    </a>
                    <div class="caption">
                        <h3>İstanbul</h3>
                        <p>Istanbul is a major city in Turkey that straddles Europe and Asia across the Bosphorus
                            Strait. Its Old City reflects cultural influences of the many empires that once ruled here.
                            In the Sultanahmet district, the open-air, Roman-era Hippodrome was for centuries the site
                            of chariot races, and Egyptian obelisks also remain. The iconic Byzantine Hagia Sophia
                            features a soaring 6th-century dome and rare Christian mosaics.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox"
                        href="../images/Film-London-Brochure-2019-COVER-IMAGE_9eed5a99b701ba360780d44a67c674dc.jpg">
                        <img src="../images/Film-London-Brochure-2019-COVER-IMAGE_9eed5a99b701ba360780d44a67c674dc.jpg"
                            alt="Tuneel">
                    </a>
                    <div class="caption">
                        <h3>London</h3>
                        <p>London, the capital of England and the United Kingdom, is a 21st-century city with history
                            stretching back to Roman times. At its centre stand the imposing Houses of Parliament, the
                            iconic ‘Big Ben’ clock tower and Westminster Abbey, site of British monarch coronations.
                            Across the Thames River, the London Eye observation wheel provides panoramic views of the
                            South Bank cultural complex, and the entire city.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="../images/download.jpg">
                        <img src="../images/download.jpg" alt="Tuneel">
                    </a>
                    <div class="caption">
                        <h3>Tokyo</h3>
                        <p>Tokyo, Japan’s busy capital, mixes the ultramodern and the traditional, from neon-lit
                            skyscrapers to historic temples. The opulent Meiji Shinto Shrine is known for its towering
                            gate and surrounding woods. The Imperial Palace sits amid large public gardens. The city's
                            many museums offer exhibits ranging from classical art (in the Tokyo National Museum) to a
                            reconstructed kabuki theater (in the Edo-Tokyo Museum).</p>
                    </div>
                </div>
            </div>



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