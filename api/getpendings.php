<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    require_once('connection.php');
    $cid=$_POST['cid'];
    $sql="SELECT * FROM `grs_purchase` WHERE cust_id='$cid' AND ispay='no'";
    $rt=mysqli_query($con,$sql);
    $data="[";
    while($rw=mysqli_fetch_assoc($rt))
    {
        $data=$data.json_encode($rw).',';
    }
    $data=substr($data,0,strlen($data)-1);
    $data=$data."]";
    echo $data;
    mysqli_close($con);
}
else
{
    echo "Access Denie";
}
?>