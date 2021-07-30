<?php
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

$usn=$_POST['usn'];
$password=$_POST['psw'];

echo "</br>";
$qry="select * from marks where USN='$usn'and PASSWORD='$password'";
$result=mysqli_query($conn,$qry);

echo "</br>";
if($result->num_rows > 0){

	while($row=mysqli_fetch_array($result)){
		echo "NAME=";
		echo $row['NAME'];
		echo "</br>";
		echo "USN=";	
		echo $row['USN'];
		echo "</br>";
		echo "MATH=";
		echo $row['MATHEMATICS'];
		echo "</br>";
	}
    header("Location:secondpage.html");
}
else{  
echo '<script type="text/JavaScript">  
     alert("INVALID USERNAME OR PASSWORD!! "); 
     </script>' ;
}
 ?>