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
     $name = $_POST['name'];
     $Email = $_POST['Email'];
     $Age = $_POST['Age'];
     $Phoneno = $_POST['Phoneno'];
     $Gender = $_POST['Gender'];
 
     $sql_query = "INSERT INTO reg_details (name,Email,Age,phoneno,Gender)
     VALUES('$name','$Email','$Age','$Phoneno','$Gender')";
     
     if (mysqli_query($conn, $sql_query))
     {
         echo "NEW DETAILS INSERTED SUCCESSFULLY !";
     }
     else
     {
         echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
 }
?>