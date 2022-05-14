<?php
$fname= $_POST['fname'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];

$host="localhost";
$username="root";
$password="";

try
{
    $conn=new PDO("mysql:host=$host;dbname=phptest",$username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed:" .$e->getmessage();
}

if (isset($_POST['fname']) && $_POST['fname']!='' && isset($_POST['mobile']) && $_POST['mobile']!='' && isset($_POST['email']) && $_POST['email']!='')
{
    $sql="INSERT INTO info(fname,mobile,email) VALUES('".addslashes($_POST['fname'])."','".addslashes($_POST['mobile']). "','".addslashes($_POST['email'])."')";
    if($conn->query($sql))
    {
        $response['success']=true;
    }
}

echo "Thank You! Your response has been submitted.";
?>