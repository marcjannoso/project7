<?php  

  $con = mysqli_connect('localhost', 'root', '');

  if(!$con)
  {
  	echo 'Not connected to server';
  }
  if(!mysqli_select_db($con,'tutorial'))
  {
  	echo 'database not selected';
  }

  $Name = $_POST['username'];
  $Email = $_POST['email'];
  $Age = $_POST['age'];
  $Address = $_POST['address'];
  $Telephone = $_POST['telephone'];

  $sql = "INSERT INTO person(Name,Email,Age,Address,Telephone) VALUES ('$Name','$Email','$Age','$Address','$Telephone')";
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