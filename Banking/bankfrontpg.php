<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HDFC Bank</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine|Roboto|Caprasimo|Abril Fatface">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <style>
        
        .nav{
            width:100%;
            height:80px;
            border:2px solid black;
            box-shadow: 3px 3px 15px rgb(15, 79, 109);
            font-family:Caprasimo;
            background-color: #004c85;
            color:white;
        }
        .divbut{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            bottom:600px;
        }
        button{
            padding:10px 15px;
            font-size: 25px;
            cursor: pointer;
            margin-top:50px;
            background-color: navy;
            color:white;
            border-radius:10px; 
            box-shadow:inset 5px 5px 16px 8px rgb(7, 136, 216);   
            border-color: aqua;      
        }
        button:hover{
          transform:scale(1.1, 1.1);
          color:antiquewhite;
        }

        .navdown{
            width:100%;
            height:170px;
            border:2px solid #0063B2;
            /* background-color: #0063B2; */
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

        .imgdiv{
            height:80px; width:100px;
            background-color: whitesmoke;
            position:relative;
            left:80px;
        }
        body{
            background-color:#95B9C7;
        }
        h1{
            position:relative;
            bottom:80px;
            text-align:center;
            font-family: Abril Fatface;
            letter-spacing: 1.9px;
            text-shadow: 3px 3px 6px aqua;
        }
        .star {
            font-size: 20px;
            animation-name:stars;
            animation-duration:1s;
            animation-iteration-count: infinite;
        }
        @keyframes stars{
          from {transform: scale(1, 1); color:rgb(255, 0, 64);}
          to {tranform:scale(0.8, 0.8); color:rgb(47, 0, 255);}
        }
        .sidediv1{
            height:300px;width:300px;
            border:2px solid black;
            border-radius: 30px;
            background-color: white;
            color:black;            
            position:relative;
            left:80px;
            top:30px;
            font-size: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            animation-name: sidebox1;
            animation-duration: 2s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            box-shadow: inset 3px 3px 20px 3px navy;
        }
        @keyframes sidebox1{
            0%{
                
            }
            100%{
                background-image: linear-gradient(to top left, grey, rgb(76, 189, 226));
                box-shadow: 3px 3px 20px 5px navy;
                color: black;
            }
        }
        .maindiv{
            height:300px;width:300px;
            border:2px solid black;
            border-radius: 30px;
            background-image: linear-gradient(to top left, grey, rgb(76, 189, 226));
            color:black;            
            position:relative;
            left:1050px;
            bottom:270px;
            font-size: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            animation-name: sidebox2;
            animation-duration: 2s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            box-shadow: 3px 3px 20px 5px navy;
        }
        @keyframes sidebox2{
            0%{
                
            }
            100%{
                background-image: linear-gradient(to top left, white, whitesmoke);
                box-shadow:inset 3px 3px 20px 3px navy;
                color: black;
            }
        }
    </style>
</head>
<body bgcolor="lightblue">
    <div class="nav">
        <div class="imgdiv">
            <img style="position:relative; right:15px; bottom:24px;" src="hdfc-bank-editorial-logo-free-png.webp" height="130px" width="130px">
        </div>
        <h1>HDFC BANK</h1>
        <a href="bankcust.php"><i class="material-icons" style="font-size: 30px; color:white; position:relative; left:1350px; bottom:135px;">account_circle</i></a>
    </div>
    <div class="navdown">
        <img src="hdfc lady2.jpg" height="170px" width="550px" style="background-color: blue; border-radius: 0px 50px 50px 0px;">
        <p style="text-shadow: 5px 3px 3px rgb(201, 36, 36);">We have upgraded.<br>You should too.<br>
        <span style="font-size:28px; font-weight:200;">Open your Account NOW!</span></p>
    </div>
    
    <MARQUEE behavior="alternate" bgcolor="#95B9C8"><H2 class="star">WELCOME TO HDFC BANK</H2></MARQUEE>
    <div class="sidediv1">
        Open Your Savings Account instantly<br>
        with AADHAR, Online.<br>
    </div>
    <div class="maindiv">
        <p>Realise your <br>potential<br> everywhere.
        <br>Manage your <br>FINANCES<br> wisely.</p>
    </div>
    
    <div class="divbut">
            <button><a href="bankabout.php" style="text-decoration-line:none; color:black;"><span style="color:white;">ABOUT BANK</span></a></button>
            <BUTTON><a href="bankopensvng.php" style="text-decoration-line:none; color:black;"><span style="color:white;">OPEN SAVINGS ACCOUNT</span></a></BUTTON>
            <BUTTON><a href="bankcust.php" style="text-decoration-line:none; color:black;"><span style="color:white;">EXISTING CUSTOMER</span></a></BUTTON>
    </div>
</body>
</html>
