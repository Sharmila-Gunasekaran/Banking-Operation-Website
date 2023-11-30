<?php    
 $pinnum = $_POST['pinno'];
 $nummo = $_POST['numo'];    
    $conn=new mysqli("localhost", "root", "", "test" );    
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    // else{
    //     echo "connected";
    // }     

     $var2="SELECT MAX(Accountnumber) FROM Savingss";
    $query1=$conn->query($var2);

    $element=mysqli_fetch_array($query1);
    $maxAccountNumber=$element[0];
    
    $var1="UPDATE Savingss SET PINnumber = '$pinnum' WHERE Accountnumber = '$nummo'";
    $query2 = $conn->query($var1);     
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savings account created</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine|Roboto|Caprasimo|Abril Fatface">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='styling.css'>
    <style>
        .firsth1{
          font-size:45px;
          animation: blinkme 1s 1;
        }
        @keyframes blinkme{
          0%{
               transform: scale(0.9, 0.9);               
          }
          50%{              
               transform: scale(1, 1);
          }
          100%{
               transform: scale(0.9, 0.9);
          }
        }
        .secondh1{
          font-size:45px;
          animation: blinkmee 1s 1;
        }
        @keyframes blinkmee{
          0%{
               transform: scale(1, 1);  
          }
          50%{              
               transform: scale(0.9, 0.9);               
          }
          100%{
               transform: scale(1, 1);               
          }
        }
        a{
          text-decoration-line:none;
          color:white;
        }
    </style>
</head>
<body>
<div id='navi'>
        <div style='background-color:whitesmoke'>
            <img class='img-fluid' src="hdfclogo.webp" height="130px" width="130px">
        </div>
        <h1>HDFC BANK</h1>
        <div>
        <a href="bankfrontpg.php"><i class="material-icons" style="font-size: 35px; color:white;">home</i></a>
        <a href="bankcust.php"><i class="material-icons" style="font-size: 35px; color:white">account_circle</i></a></div>
</div>
<div id='navdown'>        
        <img class='img-fluid' src="hdfc lady2.jpg" height="70px" width="400px">  
        <div style="text-shadow: 5px 3px 3px rgb(201, 36, 36); line-height:'1.5'; padding:10px;">      
        <p>We have upgraded.  You should too.</p>
        <p style="font-size:20px; font-weight:500;">Open your Account NOW!</p></div>
</div>
<br><br>
    <center><h2 class="firsth1">Thank You!</h2>
     <h2  class="secondh1">You have opened your Savings Account in HDFC Bank!</h2></center>
</body>
</html>
