<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    require_once('connection.php');
    $cid=$_POST['cid'];
    $sql="SELECT * FROM `grs_cust` WHERE cust_id='$cid'";
    $rw=mysqli_fetch_assoc(mysqli_query($con,$sql));
    if(strlen($rw['cust_id'])>0)
    {
        echo "1";
    }
    else
    {
        echo "0";
    }
    mysqli_close($con);
}
else{
    echo "Access Denie";
}
?>