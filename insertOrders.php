<?php  

  $con = mysqli_connect('localhost', 'root', '');

  if(!$con)
  {
  	echo 'Not connected to server';
  }
  if(!mysqli_select_db($con,'tutorial1'))
  {
  	echo 'database not selected';
  }

  $Name = $_POST['name'];
  $Model = $_POST['model'];
  $Telephone = $_POST['telephone'];

  $sql = "INSERT INTO person(Name,Model,Telephone) VALUES ('$Name','$Model','$Telephone')";
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