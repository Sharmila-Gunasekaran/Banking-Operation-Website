<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Customer page</title>
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
        .sub{
            background-image: linear-gradient(to right, green, rgb(121, 236, 121), green);
            padding:15px 30px;
            border-radius: 25px;
            font-size:large;
            color:white;
            border-color:green;
        }
        .sub:hover{
            transform: scale(1.1, 1.1);
        }
        .maindiv{
            display: flex;
            align-items: center;
            justify-content: center;
            width:800px;
            height:450px;
            margin-left:320px;
            background-image: linear-gradient(to top right, blue, lavender, rgb(133, 194, 214), rgb(93, 193, 226), rgb(41, 134, 196), navy);
            box-shadow: 3px 3px 25px #0063B2;
            border-color: #004c85;
            font-size: 35px;
            font-weight: 900;
            border-color:2px solid rgb(0, 26, 255);
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
        }
    </style>
</head>
<body bgcolor="#95B9C7">
    <div class="nav">
        <img src="hdfc.png" height="50px" width="200px" style="position:relative; top:15px; left:120px;">
        <a href="bankfrontpg.php"><i class="material-icons" style="font-size: 30px; color:white; position:relative; left:1120px;">home</i></a>
    </div>
    <div class="navdown">
        <img src="hdfc lady2.jpg" height="170px" width="550px">
        <p style="text-shadow: 5px 3px 3px rgb(201, 36, 36);">We have upgraded.<br>You should too.<br>
        <span style="font-size:28px; font-weight:200;">Open your Account NOW!</span></p>
    </div>
    <br>
    
    <div class="maindiv">
        <form name="myform" onsubmit="return validation()"  method="post" action="bankpin.php">
            <table>
                <tr><td>Account number:</td><td></td><td><input type="text" autofocus name="acc" style="padding:10px 20px; border-radius:10px;"></td></tr>
                <tr><td>Account Holder Name:</td><td></td><td><input type="text" Placeholder="Your First name" name="firstname" style="padding:10px 20px; border-radius:10px;"></td>
                <td><input type="text" Placeholder="Your Last name" name="lastname" style="padding:10px 20px; border-radius:10px;"></td></tr>
                <tr><td>IFSC:</td><td></td><td><input type="text" value="HDFC00356" readonly name="ifsc" style="padding:10px 20px; border-radius:10px;"></td></tr>
            </table>
            <br>
            <center>               
               <br>
               <input type="reset" value="Clear" class="sub" style="padding-left: 30px; padding-right: 30px;">&nbsp; &nbsp;
               <input type="submit" value="SUBMIT" class="sub">
            </center>

        </form>
    </div>
    <br>
    <div class="footer">
        @copyright HDFC Bank Ltd.
    </div>
    <script>
        function validation(){
            let name=document.myform.acc.value;
            let holdername=document.myform.holdname.value;
            let ifscnum=document.myform.ifsc.value;
            let url1;
            
            if(name==null || name==""){
                alert("Please enter your account number. It should not be empty");
                return false;
            }
            if(holdername==null || holdername==""){
                alert("Please enter account holder name. It should not be empty");
                return false;
            }
            if(ifscnum==null || ifscnum==""){
                alert("Please enter IFSC number. It should not be empty");
                return false;
            }
        }
    </script>
</body>
</html>
