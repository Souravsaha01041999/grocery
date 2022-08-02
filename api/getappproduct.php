<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    require_once('connection.php');
    $admin=$_POST['admin'];
    $sql="SELECT * FROM `grs_product` WHERE adminid='$admin'";
    $rt=mysqli_query($con,$sql);
    $data="[";
    while($row=mysqli_fetch_assoc($rt))
    {
        $data=$data.json_encode($row).',';
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