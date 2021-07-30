<?php
session_start();
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

$username=$_SESSION['uname'];
$password=$_SESSION['psw'];

$qry="select * from marks where USN='$username'and PASSWORD='$password'";
$result=mysqli_query($conn,$qry);



if($row=mysqli_fetch_array($result)){
	 
    $name= $row['NAME'];
    $usn=$row['USN'];
    $osa=$row['OSA'];
    $mathsa=$row['MATHSA'];
    $dsa=$row['DSA'];
    $dda=$row['DDA'];
    $coaa=$row['COAA'];
    $oopa=$row['OOPA'];
}
$osp=round($osa/36,4)*100;
$mathsp=round($mathsa/36,4)*100;
$oopp=round($oopa/36,4)*100;
$ddp=round($dda/36,4)*100;
$dsp=round($dsa/36,4)*100;
$coap=round($coaa/36,4)*100;


?>
   
<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
    
        <title>ATTENDANCE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Pricing example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/pricing/">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>";

    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
        .fa-check {
        color: green;
        }
        .fa-remove {
        color: red;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="index.css" rel="stylesheet">
  </head>
  <body style="background: url(http://www.finaxismgmt.com/uploads/pictures/4d2d0a48d428a40aef17f045253e88b0mff.png) no-repeat;
  background-size: cover;">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><font color="white"><H3>ATTENDANCE</H3></font></h5>
  <nav class="my-2 my-md-0 mr-md-3">

        <div class="navbar navbar-dark bg-dark box-shadow">


    
    <a class="btn btn-outline-primary" href="second.html">BACK</a>
  </nav>
  <a class="btn btn-outline-primary" href="loginpage.html">LOGOUT</a>
</div>
<div style="margin-left: 25px;">
        <h4><font color="white">STUDENT NAME:<?=$name ?></font></h4>
        <h4><font color="white">USN NO:<?=$usn ?></font></h4>
        <h4><font color="white">SEMESTER:III</font></h4>
        </div>
        
    
    
        
          <div class="container">
                <table class="table table-hover">
                  <thead>
                    <tr class="table-active">
                      <i class="fa fa-lock" aria-hidden="true"></i>
                      <th><font>ATTENDANCE</font></th>
                      <th>TOTAL CLASSES</th>
                      <TH>CLASSES ATTENDED</TH>
                      <TH>PERCENTAGE %</TH>
              
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-active">
                      <td>OS</td>
                      <td>36</td>
                      <td><?=$osa ?></td>
                      <td><?=$osp ?>%</td>
                    </tr>
                    <tr class="table-active">
                      <td>MATHEMATICS</td>
                      <td>36</td>
                      <td><?=$mathsa ?></td>
                      <td><?=$mathsp ?>%</td>
              
                    </tr>
                    <tr class="table-active">
                      <td>DS </td>
                      <td>36</td>
                      <td><?=$dsa ?></td>
                      <td><?=$dsp ?>%</td>
              
                    </tr>
                    <tr class="table-active">
                            <td>DD </td>
                            <td>36</td>
                            <td><?=$dda ?></td>
                            <td><?=$ddp ?>%</td>
                    
                          </tr><tr class="table-active">
                                <td>COA</td>
                                <td>36</td>
                                <td><?=$coaa ?></td>
                                <td><?=$coap ?>%</td>
                        
                              </tr>
                              <tr class="table-active">
                                    <td>OOP</td>
                                    <td>36</td>
                                    <td><?=$oopa ?></td>                    
                                    <td><?=$oopp?>%</td>
                            
                                  
                                
                                      </tr>
                                      
                  </tbody>
                </table>
        
                    
                 
              </div>
    
              </div>
    </div>


</body>
</html>