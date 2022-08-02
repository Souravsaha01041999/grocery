<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    require_once('connection.php');
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $sql="SELECT * FROM `grs_admin` WHERE adminid='$user'";
    $rt=mysqli_query($con,$sql);
    $data=mysqli_fetch_assoc($rt);
    if(strlen($data['adminid'])>0)
    {
        
        if($data['password']==$pass)
        {
            echo "DONE";
        }
        else
        {
            echo "PASSWORD NOT MATCH";
        }
    }
    else
    {
        echo "USER NOT FOUND";
    }
    mysqli_close($con);
}
else
{
    echo "Access Denie";
}
?>