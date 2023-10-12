<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Exit page</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
        <style>
            .div1{
                display: flex;
                align-items: center;
                justify-content: center;
                font-size:50px;
                font-weight: 900;
                color:aqua;
                text-shadow: 5px 4px 6px rgb(0, 255, 64);
                text-align: center;
                height:600px;
            }
            .nav{
            width:100%;
            height:80px;
            border:2px solid black;
            box-shadow: 3px 3px 15px rgb(179, 140, 140);
            font-family:Caprasimo;
            background-color: #004c85;
            color:white;
        }
            .show{
                animation-name: showme;                
                animation-duration: 2s;
                animation-iteration-count: 1;
                animation-timing-function: linear;
                position:relative;
                bottom: 40px;
            }
            @keyframes showme{
                0%{
                    transform: scale(1.5, 1.5);
                }
                50%{
                    transform: scale(0.6, 0.6);
                }
                100%{
                    transform: scale(1, 1);
                }
            }
            .footer{
            background-color: #004c85;
            color:white;
            font-weight: bolder;
            font-size: large;
            width: 100%;
            height:30px;
            padding:10px;
            display: flex;
            align-items: center;
            position:sticky;
            bottom:0px;
        }
        body{
            background-color: #95B9C7;
        }
        </style>
</head>
<body>
<div class="nav">
        <img src="hdfc.png" height="50px" width="200px" style="position:relative; top:15px; left:120px;">
        <a href="bankfrontpg.php"><i class="material-icons" style="font-size: 30px; color:white; position:relative; left:1120px;">home</i></a>
        <a href="bankcust.php"><i class="material-icons" style="font-size: 30px; color:white; position:relative; left:1140px;">account_circle</i></a>
    </div>
    <div class="div1">
        <P class="show">LOGGED OUT SUCCESSFULLY!
        <br>THANK YOU FOR BANKING WITH <span style="color:rgb(236, 82, 146); text-shadow: 4px 4px 6px rgb(251, 255, 0);">HDFC</span>!</P>
    </div>
    <br>
    <div class="footer">
        @copyright HDFC Bank Ltd.
    </div>
</body>
</html>