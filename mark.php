<?php
$dbhost = 'localhost' ;
$username = 'root';
$password = '';
$db = 'login';
 $conn=mysqli_connect("$dbhost","$username","$password","$db");
//   if(!$conn)
//  {	
//  	echo "Database connection failed";	
//  }
//  else{
//  	echo "connected good to go";
//  }

//$username=$_POST['usn'];
//$password=$_POST['psw'];

$username='1BM18IS097';
$password='1BM18IS097';
echo "</br>";
$qry="select * from marks where USN='$username'and PASSWORD='$password'";
$result=mysqli_query($conn,$qry);

echo "</br>";

if($row=mysqli_fetch_array($result)){
	 
    $name= $row['NAME'];
    $usn=$row['USN'];
    $os1=$row['OS1'];
    $os2=$row['OS2'];
    $os3=$row['OS3'];
    $math1=$row['MATHS1'];
    $math2=$row['MATHS2'];
    $math3=$row['MATHS3'];
    $ds1=$row['DS1'];
    $ds2=$row['DS2'];
    $ds3=$row['DS3'];
    $dd1=$row['DD1'];
    $dd2=$row['DD2'];
    $dd3=$row['DD3'];
    $coa1=$row['COA1'];
    $coa2=$row['COA2'];
    $coa3=$row['COA3'];
    $oop1=$row['OOP1'];
    $oop2=$row['OOP2'];
    $oop3=$row['OOP3'];
    //echo $ds1;
    

	
	// while($row=mysqli_fetch_array($result)){
	// 	echo "NAME=";
	// 	echo $row['NAME'];
	// 	echo "</br>";
	// 	echo "USN=";	
	// 	echo $row['USN'];
	// 	echo "</br>";
		
	// }
	
  //  header("Location:second.html");
}
// else{  
// echo '<script type="text/JavaScript">  
//      alert("INVALID USERNAME OR PASSWORD "); 
// 	 </script>' ;

// }
// //header("Location:second.html");
 ?>