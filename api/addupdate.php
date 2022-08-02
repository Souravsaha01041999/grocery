<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    require_once('connection.php');
    $mode=$_POST['mode'];
    $admin=$_POST['admin'];
    $itemame=$_POST['itemname'];
    $itemqun=$_POST['itemqun'];
    $itemunit=$_POST['itemunit'];
    $itemprice=$_POST['itemprice'];

    $sql="";
    if($mode=="insert")
    {
        $sql="INSERT INTO `grs_product` VALUES ('$itemame',$itemqun,'$itemunit',$itemprice,'$admin')";
    }
    elseif($mode=="update")
    {
        $sql="UPDATE `grs_product` SET prd_qun=$itemqun, prd_unit='$itemunit', prd_price=$itemprice WHERE adminid='$admin' AND prd_name='$itemame'";
    }
    mysqli_query($con,$sql);
    echo "done";
    mysqli_close($con);
}
else
{
    echo "Access Denie";
}
?>