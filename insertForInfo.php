<?php  

  $con = mysqli_connect('localhost', 'root', '');

  if(!$con)
  {
  	echo 'Not connected to server';
  }
  if(!mysqli_select_db($con,'tutorial2'))
  {
  	echo 'database not selected';
  }

  $Firstname = $_POST['firstname'];
  $Lastname = $_POST['lastname'];
  $Email = $_POST['email'];
  $Address = $_POST['address'];

  $sql = "INSERT INTO person(Firstname,Lastname,Email,Address) VALUES ('$Firstname','$Lastname','$Email','$Address')";
   if(!mysqli_query($con,$sql))
   {
   	echo 'not inserted';
   }
   else
   	 {
   	 	echo 'submitted';
   	 }
   	 header("refresh:1; url=index.html");

?>