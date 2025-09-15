<?php
 $servername="localhost";
 $username="root";
 $password="";
 $database_name="database1";
 
 $conn=mysqli_connect($servername,$username,$password,$database_name);
 if (!$conn)
 {
     die("Connection Failed:" . mysqli_connect_error());
 }
 if (isset($_POST['submit']))
 {
     $Name = $_POST['Name'];
     $Email = $_POST['Email'];
     $Mobile = $_POST['Mobile'];
     $message = $_POST['message'];
 
     $sql_query = "INSERT INTO contact_info (Name,Email,Mobile,message)
     VALUES('$Name','$Email','$Mobile','$message')";
     
     if (mysqli_query($conn, $sql_query))
     {
         echo " DETAILS INSERTED SUCCESSFULLY !";
     }
     else
     {
         echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
 }
?>