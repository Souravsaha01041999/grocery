<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    require_once('connection.php');
    $cid=$_POST['cid'];
    $sql="SELECT * FROM `grs_cust` WHERE cust_id='$cid'";
    $rt=mysqli_query($con,$sql);
    $rw=mysqli_fetch_assoc($rt);    
    echo "[".json_encode($rw)."]";
    mysqli_close($con);
}
else
{
    echo "Access Denie";
}
?>