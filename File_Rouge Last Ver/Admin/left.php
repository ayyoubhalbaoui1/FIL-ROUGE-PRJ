<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
</head>

<body>
    <table style="width:100%">
        <tr>
            <td style="font-size:28px">Admin Links</td>
        </tr>

        <?php if($_SESSION["usertype"]=="Admin")
{?>

        <tr>
            <td><a href="adduser.php">Add User</a></td>
        </tr>
        <tr>
            <td><a href="updateuser.php">Update User</a></td>
        </tr>
        <tr>
            <td><a href="deleteuser.php">Delete User</a></td>
        </tr>

        <?php }?>

        <tr>
            <td><a href="addcategory.php">Add Direction</a></td>
        </tr>


        <?php if($_SESSION["usertype"]=="Admin")
{?>
        <tr>
            <td><a href="updatecategory.php">Update Direction</a></td>
        </tr>
        <tr>
            <td><a href="deletecategory.php">Delete Direction</a></td>
        </tr>
        <?php }?>


        <tr>
            <td><a href="viewcategory.php">View Direction</a></td>
        </tr>
        <tr>
            <td><a href="addsubcategory.php">Add SUBDirection</a></td>
        </tr>
        <?php if($_SESSION["usertype"]=="Admin")
{?>
        <tr>
            <td><a href="updatesubcategory.php">Update SUBDirection</a></td>
        </tr>
        <tr>
            <td><a href="deletesubcategory.php">Delete SUBDirection</a></td>
        </tr>
        <?php }?>

        <tr>
            <td><a href="viewsubcategory.php">View SUBDirection</a></td>
        </tr>
        <tr>
            <td><a href="addoffer.php">Add Offer</a></td>
        </tr>

        <?php if($_SESSION["usertype"]=="Admin")
{?>
        <tr>
            <td><a href="updateoffer.php">Update Offer</a></td>
        </tr>
        <tr>
            <td><a href="deleteoffer.php">Delete Offer</a></td>
        </tr>

        <?php }?>

        <tr>
            <td><a href="viewoffer.php">View Offer</a></td>
        </tr>

        <tr>
            <td><a href="viewenquiry.php">View Reservation</a></td>
        </tr>
    </table>


</body>

</html>