<?php
/*
$connect=new mysqli("localhost","root","","sampledb");

if($connect->connect_error){
    echo"failed".$connect->connect_error;
    exit();

}
echo"success";
$sql="SELECT * FROM usr_reg";
$result=mysqli_query($connect,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        echo $row['fname'];
    }
}*/

if(!isset($_POST['submit']))
{
    $fn=$_POST['fn'];
    $ln=$_POST['ln'];
    $un=$_POST['un'];
    $pas=$_POST['pas'];
    //$mid=$_POST['mid'];
    //$cno=$_POST['cno'];
    $con= mysqli_connect("localhost","root","","sampledb");
    $sql="INSERT INTO email(fname) VALUES ('$fn')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"Added successfully";
    }
    else{
        echo"not succesful";
    }
}
    



?>