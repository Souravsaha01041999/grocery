<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    require_once('connection.php');
    $path="../photos/";
    $path=$path.basename($_FILES['file']['name']);
    $cstid=$_POST['castid'];
    $castname=$_POST['castname'];
    $admin=$_POST['admin'];
    if(move_uploaded_file($_FILES['file']['tmp_name'],$path))
    {
        $temp="./photos/".basename($_FILES['file']['name']);
        $sql="INSERT INTO `grs_cust` VALUES('$cstid','$castname','$temp','$admin')";
        if(mysqli_query($con,$sql))
        {
            echo "Done";
        }
        else
        {
            echo "error";
        }
    }
    else{
        echo "error";
    }
    mysqli_close($con);
}
else{
    echo "Access Denie";
}
?>