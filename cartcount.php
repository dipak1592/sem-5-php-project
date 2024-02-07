<?php
include("include/connection.php");
if(isset($_REQUEST['uid']))
{
    $uid=$_REQUEST['uid'];
    $sql="select a.*,p.* from addtocarts a,products p where a.proId=p.proId and userId=$uid";
    $cmd=mysqli_query($con,$sql);
    $c=mysqli_num_rows($cmd);

    echo $c;
}
?>