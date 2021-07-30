<?php
session_start();
$dbhost = 'localhost' ;
$username = 'root';
$password = '';
$db = 'login';
 $conn=mysqli_connect("$dbhost","$username","$password","$db");
//  if(!$conn)
// {	
// 	echo "Database connection failed";	
// }
// else{
// 	echo "connected good to go";
// }

$username=$_POST['uname'];
$password=$_POST['psw'];
$_SESSION['uname'] = $username;
$_SESSION['psw'] = $password;
echo "</br>";
$qry="select * from marks where USN='$username'and PASSWORD='$password'";
$result=mysqli_query($conn,$qry);

echo "</br>";

if($row=mysqli_fetch_array($result)){
	 
	$nam= $row['NAME'];
	//echo $nam;
	// while($row=mysqli_fetch_array($result)){
	// 	echo "NAME=";
	// 	echo $row['NAME'];
	// 	echo "</br>";
	// 	echo "USN=";	
	// 	echo $row['USN'];
	// 	echo "</br>";
		
	// }
	echo  "<script type='text/JavaScript'>  
     		alert('welcome  ' + '$nam' ); 
    	  </script>";
    header("Location:second.html");
}
else{  
echo '<script type="text/JavaScript">  
     alert("INVALID USERNAME OR PASSWORD "); 
	 </script>' ;

}
//header("Location:second.html");
 ?>