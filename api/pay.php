<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    require_once('connection.php');
    $cid=$_POST['cid'];
    $sql="UPDATE `grs_purchase` SET ispay='yes' WHERE cust_id='$cid'";
    mysqli_query($con,$sql);
    mysqli_close($con);
    echo "done";
}
else
{
    echo "Access Denie";
}
?>