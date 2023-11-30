<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Existing customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine|Roboto|Caprasimo|Abril Fatface">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='styling.css'>
    <style>
        fieldset input{
            width:80%;
        }
        .sub{
            background-image: linear-gradient(to right, green, rgb(121, 236, 121), green);
            border-radius: 25px;
            padding:5px 10px;
            font-size:large;
            color:white;
            border-color:green;
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
<div>
<center>
        <form name="myform" onsubmit="return validation()"  method="post" action="bankpin.php">
        <fieldset>
            <table>
                <tr><td>Account number:</td><td></td><td><input type="text" autofocus name="acc" style="padding:10px 20px; border-radius:10px;"></td></tr>
                <tr><td>Account Holder Name:</td><td></td><td><input type="text" Placeholder="Your First name" name="firstname" style="padding:10px 20px; border-radius:10px;"></td>
                <td><input type="text" Placeholder="Your Last name" name="lastname" style="padding:10px 20px; border-radius:10px;"></td></tr>
                <tr><td>IFSC:</td><td></td><td><input type="text" value="HDFC00356" readonly name="ifsc" style="padding:10px 20px; border-radius:10px;"></td></tr>
            </table>
            <br><br>
               <button type="reset" class="sub">CLEAR</button>&nbsp; &nbsp;
               <button type="submit" class="sub">SUBMIT</button>
            </center>
</fieldset>
        </form>
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
