<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank pin validation</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            background-color: #0063b0;
            color:white;
            font-weight:bolder;
            font-size:35px;
            letter-spacing: 2px;
            display:flex;
        }
        .navdown p{
           padding-left:100px;
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
        .extra{
            height:160px; width:1000px;
            border:2px solid navy;
            background-image: linear-gradient(to right, #024277, navy, blue, #024277, #759fc2, navy);
            padding:10px;
            color:white;
            font-size:25px;
            font-weight:500px;
            display: flex;
            line-height: 0.1px;
            padding:10px;     
        }
        .pin{
            height:500px; width:600px;
            border:2px solid grey;
            background-image: linear-gradient(to right, #03618a, #95B9C8);
            box-shadow: 3px 3px 6px 6px grey;
            border-radius: 30px;
            display:none;
        }
        .sub{
            background-image: linear-gradient(to right, green, rgb(121, 236, 121), green);
            padding:15px;
            border-radius: 25px;
            font-size:large;
            color:white;
            border-color:green;
        }
        .sub:hover{
            transform: scale(1.1, 1.1);
        }
        body{
            background-color: #95B9C7;
        }
        h1{
            color:Blue;
            text-shadow: 4px 4px 6px aqua;
            animation: shrink 1s infinite linear;
        }
        @keyframes shrink{
            0%, 100%{
                transform: scale(1, 1.1);
            }
            50%{
                transform: scale(1, 1);
            }
    
        }
    </style>
</head>

<body>

    <div class="nav">
        <img src="hdfc.png" height="50px" width="200px" style="position:relative; top:15px; left:120px;">
        <a href="bankfrontpg.php"><i class="material-icons" style="font-size: 30px; color:white; position:relative; left:1120px;">home</i></a>
        <a href="bankcust.php"><i class="material-icons" style="font-size: 30px; color:white; position:relative; left:1140px;">account_circle</i></a>
    </div>
    <div class="navdown">
        <img src="hdfc lady2.jpg" height="170px" width="550px">
        <p style="text-shadow: 5px 3px 3px rgb(201, 36, 36); position: relative; bottom:10px">We have upgraded.<br>You should too.<br>
        <span style="font-size:28px; font-weight:200;">Open your Account NOW!</span></p>
    </div>
    <br>

    <center>
    <div class="extra" id="extra1">
        <div style="margin:0px 30px 0px 20px;"><p>Manage your</p>
            <p style="font-size:30px;">Credit & Debit card</p>
            <p>with <i class="material-icons" style="font-size:36px; color:red; position:relative;">account_balance_wallet</i> MyCard</p>      
    </div>
    <div>
        <i class="material-icons" style="font-size:36px; color:red;">touch_app</i> One touch log-in
        <br>
        <p>------------------------</p>
        <i class="material-icons" style="font-size:36px; color:red;">tune</i> Set card controls and<p>usage limits</p>        
    </div>
    <div style="margin:0px 30px 0px 35px;">
        <i class="material-icons" style="font-size:36px; color:red;">contactless</i> View transactions,<p>statements and reward points</p>
        <br>
    </div>
    <div>
        <i class="material-icons" style="font-size:80px; position:relative; top:40px; color:white;" >qr_code_2</i>
    </div>
</center>
<br>

    <?php
$Firstname= $_POST['firstname'];
$Lastname= $_POST['lastname'];
$Accountnum= $_POST['acc'];
$IFSCnum = $_POST['ifsc'];

$conn=new mysqli("localhost", "root", "", "test");
// if($conn->connect_error){
//     echo "error: ". $conn->connect_error;
// }
// else{
//     echo "connected with database";
// }

$var1="SELECT * FROM Savings WHERE Accountnumber = '$Accountnum'";
$query=$conn->query($var1);

if($query->num_rows>0){
while($element = mysqli_fetch_array($query)){
    if($element['Firstname']==$Firstname){
        if($element['Lastname']==$Lastname){            
                echo "<center> <button class='sub' id='proceedbutton' onclick='return nextpage()'>PROCEED</button></center>";
                // <form><input type="submit" value="PROCEED" action="bankpin.php"></form>
        }
        else{
            echo "<center><h1>Your Name doesn't match with this Account number! Please check.</h1></center>";
        }
    }
    else{
        echo "<center><h1>Your Name doesn't match with this Account number! Please check.</h1></center>";
    }
}
}
else{
    echo "<center><h1>No records found! Please check your Account number. If you don't have an account in HDFC Bank,
     then open an account instantly using your AADHAR now!</h1></center>";
}
?>

<center>
<div class="pin" id="pin1">
    <h1 style="font-weight:bolder;"> ENTER YOUR 4 DIGIT PIN NUMBER</h1><br>
    <form name="myform" onsubmit="return validation()" action="bankdeposit.php" method="post">
        <input type="number" name="pinnumb" placeholder="Enter your pin number" size="40px" style=" font-size:large; font-weight:900; padding:20px 35px; text-align: center;">
        <input type="text" hidden name="accountnumber" value="<?php echo $Accountnum;?>">
        <br><br>
        <h3 id="error"></h3>
        <br><br>
        <div style="font-size:28px; font-weight:800;">
        <input type="radio" name="same" id="cash">Cash&nbsp;&nbsp;<input type="radio" id="cheque" name="same">Cheque<br><br>
        </div>
        <br>
        <input type="submit" class="sub" value="SUBMIT">
    </form>
</div>
</center>
<br><br><br><br>
    <div class="footer">
        @copyright HDFC Bank Ltd.
    </div>

   <script>
function validation(){
    let pin=new Array();
    pin=document.myform.pinnumb.value;
    length1=pin.length;
    if(pin==null || pin==""){
        document.getElementById('error').innerHTML="Please enter your PIN";
        return false;
    }
    else if(length1>4){
        document.getElementById('error').innerHTML="Please check your pin number. It should not be more than 4 digits!";
        return false;
    }
    // else if(pin!=9876){
    //     document.getElementById('error').innerHTML="Please enter the correct PIN number. The entered PIN number is not valid!";
    //     return false;
    // }
    document.getElementById('cash');
    document.getElementById('cheque');
    if(!cash.checked && !cheque.checked){
        alert("Please select Cash or Cheque!");
        return false;
    }
}

function nextpage(){
        document.getElementById('proceedbutton').style.display='none';
        document.getElementById('pin1').style.display='block';
    }

</script> 

</body>
</html>
