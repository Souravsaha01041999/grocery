<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    require_once('connection.php');
    $cart=$_POST['cart'];
    $cid=$_POST['cid'];

    $arr=explode(",",$cart);
    
    for($i=0;$i<count($arr)-1;$i+=4)
    {
        $qun=intval($arr[$i+1]);
        $price=intval($arr[$i+3])*$qun;
        $pname=strval($arr[$i]);
        $punit=strval($arr[$i+2]);
        mysqli_query($con,"UPDATE `grs_product` SET prd_qun=prd_qun-$qun WHERE prd_name='$arr[$i]'");
        mysqli_query($con,"INSERT INTO `grs_purchase` VALUES('$cid','$pname',$qun,'$punit',$price,'no')");
    }
    echo "done";
    mysqli_close($con);
}
else{
    echo "Access Denie";
}
?>