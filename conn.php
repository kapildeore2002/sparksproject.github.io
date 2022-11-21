<?php 

$server="localhost";
$username="root";
$password="";
$db="sparks_bank";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
}
if(isset($_POST['submit']))
{
  
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$res=mysqli_query($conn, "insert into contact(name,email,subject,message) VALUES('$name','$email','$subject','$message')");

if($res)
{
    echo "<script>alert('Enquiry Successfully Inserted');window.location='index.php';</script>";
}	

}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>
