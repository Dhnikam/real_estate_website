<?php
    $host="127.0.0.1";
    $db_name="dhananjay";
    $username="root";
    $password="";
 $conn=mysqli_connect('127.0.0.1','root','','dhananjay') or die("unable to connect");
 if($conn->connect_error){
 die("connection failed:".$conn->connect_error);
 }
if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
 $name=$_POST['name'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 echo $name;
}
$sql="INSERT INTO register VALUES ('$name','$email','$password')";  
if(mysqli_query($conn, $sql))
{
    echo "<script type='text/javascript'>
                    alert('registration successfully');
            document.location='index.html'</script>";
}
    else
 {
   echo "<script type='text/javascript'>
         alert('rajitraction unsuccessful.....');
         document.location='login.html'</script>";
 }
    mysqli_close($conn);


?>