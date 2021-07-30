<?php
$dbhost = 'localhost' ;
$username = 'root';
$password = '';
$db = 'login';

$conn=mysqli_connect("$dbhost","$username","$password","$db");
/*if(!$conn)
{	
	echo "Database connection failed";	
}
else{
	echo "connected good to go";
}*/
$name=$_POST["Name"];
$email=$_POST["Email"];
$password=$_POST["Password"]; 
$usn=$_POST["USN"];
$dob=$_POST["DOB"];

$sql = "INSERT INTO registration (NAME,EMAIL,PASSWORD,USN,DOB) VALUES ('$name', '$email', '$password','$usn','$dob')";
$result=mysqli_query($conn,$sql);
if($result){
  echo '<script type="text/JavaScript">  
     alert("SIGNUP SUCESSFULL!!"); 
     </script>' ;
}

else{
  echo '<script type="text/JavaScript">  
  alert("SIGNUP UNSUCESSFULL!!"); 
  </script>' ;
}
?>