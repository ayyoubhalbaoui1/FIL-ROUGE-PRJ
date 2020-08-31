<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
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
	$f1=0;
	$f2=0;
	$f3=0;
	
	$target_dir = "offerimages/";
	//t4
	$target_file = $target_dir.basename($_FILES["t4"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	
	
	

		if(move_uploaded_file($_FILES["t4"]["tmp_name"], $target_file)){
			$f1=1;
	} 	

	
	//t5
	$target_file = $target_dir.basename($_FILES["t5"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	
	
	
	
	
	//t6
	$target_file = $target_dir.basename($_FILES["t6"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	
	
	
	
	//check file size
	if($_FILES["t6"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	else{
		if(move_uploaded_file($_FILES["t6"]["tmp_name"], $target_file)){
			$f3=1;
	} 
	}
}
	 
?>

    <?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	
	if (empty($_FILES['t3']['name'])) {
	
		$s="update offer set Offername='" . $_POST["t1"] ."',Category='" . $_POST["t2"] . "',Subcategory='" . $_POST["t3"] . "',Offerprice='" . $_POST["t8"] . "',Pic1='" . $_POST["h1"] . "',Pic2='" . $_POST["h2"]. "',Pic3='" .$_POST["h3"] . "',Detail='" . $_POST["t7"] . "' where Offerid='" . $_POST["s1"] . "'";
	
}
else
{
	
	
	$s="update offer set Offername='" . $_POST["t1"] ."',Category='" . $_POST["t2"] . "',Subcategory='" . $_POST["t3"] . "',Offerprice='" . $_POST["t8"] . "',Pic1='" .  basename($_FILES["t4"]["name"]) . "',Pic2='" .  basename($_FILES["t5"]["name"]) . "',Pic3='" .  basename($_FILES["t6"]["name"]) . "',Detail='" . $_POST["t7"] . "' where Offerid='" . $_POST["s1"] . "'";}
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";
    }

?>


    <div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
        <div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
            <?php include('left.php'); ?>
        </div>
        <div class="col-sm-9">




            <form method="post" enctype="multipart/form-data">
                <table border="0" width="500px" height="700px" align="center" class="tableshadow">
                    <tr>
                        <td colspan="2" class="toptd">Update offer</td>
                    </tr>
                    <tr>
                        <td class="lefttxt">Select offer</td>
                        <td><select name="s1" required />
                            <option value="">Select</option>

                            <?php
$cn=makeconnection();
$s="select * from offer";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $data[0]==$_POST["s1"])
	{
		echo"<option value=$data[0] selected>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	}
}
mysqli_close($cn);



?>

                            </select>
                            <input type="submit" value="Show" name="show" formnovalidate />
                            <?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from offer where Offerid='" .$_POST["s1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
$Offerid=$data[0];
$Offername=$data[1];
$Category=$data[2];
$Subcategory=$data[3];
$Offerprice=$data[4];
$Pic1=$data[5];
$Pic2=$data[6];
$Pic3=$data[7];
$Detail=$data[8];

mysqli_close($cn);

}

?>

                        </td>
                    </tr>

                    <tr>
                        <td class="lefttxt">offer Name</td>
                        <td><input type="text" value="<?php if(isset($_POST["show"])){ echo $Offername ;} ?> " name="t1"
                                required pattern="[a-zA-z _]{1,50}" title="Please Enter Only Characters between 1 to 50
                                for offer Name" /></td>
                    </tr>
                    <tr>
                        <td class="lefttxt">Select Direction</td>
                        <td><select name="t2" required />
                            <option value="">Select</option>

                            <?php
$cn=makeconnection();
$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $Category==$data[0])
	{
		
		echo "<option value=$data[0] selected='selected' >$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	
}
}
mysqli_close($cn);



?>

                            </select>

                    <tr>
                        <td class="lefttxt">Select SubDirection</td>
                        <td><select name="t3" required />
                            <option value="">Select</option>

                            <?php
$cn=makeconnection();
$s="select * from subcategory";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $Subcategory==$data[0])
	{
		
		echo "<option value=$data[0] selected='selected' >$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	
}
}
mysqli_close($cn);



?>

                            </select>

                    <tr>
                        <td class="lefttxt">offer Price</td>
                        <td><input type="text" name="t8"
                                value="<?php if(isset($_POST["show"])){ echo $Offerprice ;} ?> " /></td>
                    </tr>

                    <tr>
                        <td class="lefttxt">Old Pic</td>
                        <td><img src="offerimages/<?php echo @$Pic1; ?>" width="150px" height="50px" />
                            <input type="hidden" name="h1" value="<?php if(isset($_POST["show"])) {echo $Pic1;} ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="lefttxt">Upload Pic1</td>
                        <td><input type="file" name="t4" /></td>
                    </tr>

                    <tr>
                        <td class="lefttxt">Old Pic</td>
                        <td><img src="offerimages/<?php echo @$Pic2; ?>" width="150px" height="50px" />
                            <input type="hidden" name="h2" value="<?php if(isset($_POST["show"])) {echo $Pic2;} ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="lefttxt">Upload Pic2</td>
                        <td><input type="file" name="t5" /></td>
                    </tr>

                    <tr>
                        <td class="lefttxt">Old Pic</td>
                        <td><img src="offerimages/<?php echo @$Pic3; ?>" width="150px" height="50px" />
                            <input type="hidden" name="h3" value="<?php if(isset($_POST["show"])) {echo $Pic3;} ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td class="lefttxt">Upload Pic3</td>
                        <td><input type="file" name="t6" /></td>
                    </tr>

                    <tr>
                        <td class="lefttxt">Details</td>
                        <td><textarea name="t7" /><?php if(isset($_POST["show"])){ echo $Detail ;} ?></textarea></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" value="Update" name="sbmt" /></td>
                    </tr>




                </table>
            </form>



        </div>


    </div>
    <br>
    <br>
    <br>






</body>
<?php include('bottom.php'); ?>


</html>