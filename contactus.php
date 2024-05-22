<?php
    $host="127.0.0.1";
    $db_name="dhananjay";
    $username="root";
    $password="";
 $conn=mysqli_connect('127.0.0.1','root','','dhananjay') or die("unable to connect");
 if($conn->connect_error){
 die("connection failed:".$conn->connect_error);
 }
if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
 $name=$_POST['name'];
 $email=$_POST['email'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];
}
$sql="INSERT INTO contact VALUES ('$name','$email','$subject','$message')";  
if(mysqli_query($conn, $sql))
{
    echo "<script type='text/javascript'>
                    alert('Responce sended successfully');
            document.location='contact.html'</script>";
}
    else
 {
   echo "<script type='text/javascript'>
         alert('Responce send unsuccessful.....');
         document.location='contact.html'</script>";
 }
    mysqli_close($conn);


?>