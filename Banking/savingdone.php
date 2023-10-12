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
     // 

     $var2="SELECT MAX(Accountnumber) FROM Savings";
    $query1=$conn->query($var2);

    $element=mysqli_fetch_array($query1);
    $maxAccountNumber=$element[0];
    
    $var1="UPDATE Savings SET PINnumber = '$pinnum' WHERE Accountnumber = '$nummo'";
    $query2 = $conn->query($var1);     
    ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BankOTP Page</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
        .nav{
            width:100%;
            height:80px;
            border:2px solid black;
            box-shadow: 3px 3px 15px rgb(179, 140, 140);
            font-family:Caprasimo;
            background-color: #004c85;
            color:white;
        }
        .navdown{
            width:100%;
            height:170px;
            border:2px solid #0063B2;
            /* background-color: #0063b0; */
            background-image: linear-gradient(to right, #024277, navy, blue, #024277, #759fc2, navy);
            color:white;
            font-weight:bolder;
            font-size:35px;
            letter-spacing: 2px;
            display:flex;
        }
        .navdown p{
           padding-left:100px;
           position: relative;
           bottom:10px;
        }
        .firsth1{
          font-size:45px;
          text-shadow: 3px 3px 5px  blue;
          animation: blinkme 1s infinite;
        }
        @keyframes blinkme{
          0%{
               transform: scale(0.9, 0.9);
               text-shadow: 3px 3px 10px  aqua;
               
          }
          50%{              
               text-shadow: 3px 3px 10px blue;
               transform: scale(1, 1);
          }
          100%{
               transform: scale(0.9, 0.9);
               text-shadow: 3px 3px 10px  navy;
          }
        }
        .secondh1{
          font-size:45px;
          text-shadow: 3px 3px 5px  blue;
          animation: blinkmee 1s infinite;
        }
        @keyframes blinkmee{
          0%{
               text-shadow: 3px 3px 10px blue;
               transform: scale(1, 1);             
               
          }
          50%{              
               transform: scale(0.9, 0.9);
               text-shadow: 3px 3px 10px  navy;
          }
          100%{
               transform: scale(1, 1);
               text-shadow: 3px 3px 10px  aqua;
          }
        }
        a{
          text-decoration-line:none;
          color:white;
        }
        </style>

        <body bgcolor="#95B9C7">
    <div class="nav">
        <img src="hdfc.png" height="50px" width="200px" style="position:relative; top:15px; left:120px;">
        <a href="bankfrontpg.php"><i class="material-icons" style="font-size: 30px; color:white; position:relative; left:1120px;">home</i></a>
    </div>
    <div class="navdown">
        <img src="hdfc lady2.jpg" height="170px" width="550px">
        <p  style="text-shadow: 5px 3px 3px rgb(201, 36, 36);">We have upgraded.<br>You should too.<br>
        <span style="font-size:28px; font-weight:200;">Open your Account NOW!</span></p>
    </div>
    <br><br>
    <center><h1 class="firsth1">Thank You!</h1>
     <h1  class="secondh1">You have opened your Savings Account in HDFC Bank!</h1></center>
    </body>
    </html>
