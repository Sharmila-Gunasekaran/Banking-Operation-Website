<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <style>
        .mydiv{
            height:325px; width:600px;
            border:2px solid grey;
            background-color: #759fc2;
            font-weight:900;
            font-size: 25px;
            margin:auto;
            padding:30px;        
            display:none;
            border-radius: 30px;
            box-shadow: 3px 3px 6px 6px grey;
            background-image: linear-gradient(to right, #03618a, #95B9C8);
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
        form p{
            font-size: 25px;
            font-weight: 800;
            color:blue;
            text-shadow: 3px 3px 8px lightcoral;
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
        .navdown{
            width:100%;
            height:170px;
            border:2px solid #0063B2;
            background-color: #0063b0;
            /* background-image: linear-gradient(to right, #024277, navy, blue, #024277, #759fc2, navy); */
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
        body{
            background-color: #95B9C7;
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
        h1{
            color:Blue;
            text-shadow: 4px 4px 6px aqua;
            animation: shrink 1s infinite linear;
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
        <p style="text-shadow: 5px 3px 3px rgb(201, 36, 36);">We have upgraded.<br>You should too.<br>
        <span style="font-size:28px; font-weight:200;">Open your Account NOW!</span></p>
    </div>
    <br>
    <center>
    <div class="extra">
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
$Accountnum= $_POST['accountnumber'];
$pin = $_POST['pinnumb'];

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
    if($element['PINnumber']==$pin){
        echo "<center> <button class='sub' id='proceedbutton2' onclick='return nextpage()'>PROCEED</button></center>";
    }
    else{
        echo "<center><h1>PIN INCORRECT. PLEASE CHECK!</h1></center>";
    }
}
}
?>
<br>
    <center>
    <div class="mydiv" id="visible" >
        <form name="myform" onsubmit="return exit()" action="bankexitpage.php"  >
            <input type="radio" name="same" id="depositradio" checked>Deposit&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="same" id="withdrawradio">Withdraw
            <br>
            <br>

        <table >
          <tr id="deplegend"><td>Enter your Deposit amount:</td><td><input type="number" id="depamnt"></td></tr>       
          <tr id="withlegend" style="display:none;"><td>Enter your Withdrawal amount:</td><td><input type="number" id="withamnt"></td></tr>
        </table>
        <p id="disp1"></p>
        <p id="disp2"></p>      
        
        <br>
        <input type="button" value="DEPOSIT" class="sub" id="depobutton" onclick="deposit()">&nbsp&nbsp
        <input type="button" value="WITHDRAW" class="sub" id="withdrawbutton" onclick="withdraw()">&nbsp&nbsp
        <input type="button" value="CHECK BALANCE" class="sub" id="balancebutton" onclick="balanc()">
        <p id="baldisp" style="font-size: 30px;"></p>
        <br>
        <input type="submit" value="EXIT" style="padding:5px 10px 5px 10px; background-color:#004c85; color:white;">
        </form>
    </div>
</center>
<br><br><br>
<div class="footer">
    @copyright HDFC Bank Ltd.
</div>
<script>   

    document.getElementById('withdrawradio').addEventListener('change', checkfunc);
    document.getElementById('depositradio').addEventListener('change', checkfunc2);
    
    function checkfunc(){
        document.getElementById('deplegend').style.display='none';
        document.getElementById('withlegend').style.display='block';
        document.getElementById('disp1').style.display='none';
        document.getElementById('disp2').style.display='none';
    }
    function checkfunc2(){
        document.getElementById('deplegend').style.display='block';
        document.getElementById('withlegend').style.display='none';
        document.getElementById('disp1').style.display='none'; 
        document.getElementById('disp2').style.display='none';      
    }
    
    let balancenew=2000;
    function deposit(){
        let depamnt=parseFloat(document.myform.depamnt.value);
        document.getElementById('disp1').style.display='block';
        document.getElementById('disp2').style.display='none';
        document.getElementById('baldisp').style.display='none';

        if(document.getElementById('withdrawradio').checked){
            document.getElementById('disp1').innerHTML = "Please select Deposit option first!";
            return false;
        }

        if(depamnt==="null"|| depamnt=="" || !(depamnt>0)){
            document.getElementById('disp1').innerHTML="Please enter a valid input!";
            return false;
        }
        else{
        balancenew = balancenew+depamnt;
        document.getElementById('disp1').innerHTML="Amount deposited successfully! And your current balance is Rs."+ balancenew;
    }
}
    function withdraw(){
        let withamnt=parseFloat(document.myform.withamnt.value);
        document.getElementById('disp2').style.display='block';
        document.getElementById('disp1').style.display='none';
        document.getElementById('baldisp').style.display='none';
        
        if(document.getElementById('depositradio').checked){
            document.getElementById('disp2').innerHTML = "Please select Withdraw option first!";
            return false;
        }
                        
        if(withamnt==="null"|| withamnt=="" || !(withamnt>0)){
            document.getElementById('disp2').innerHTML="Please enter a valid input!";
            return false;
        }
        else if(balancenew==2000 && withamnt<=2000){
            document.getElementById('disp2').innerHTML="Sorry, Rs.2000 is the minimum balance which should be maintained. As your current balance is also Rs.2000, you may not withdraw the amount.";
            return false;
        }
        else if(withamnt>balancenew){
            document.getElementById('disp2').innerHTML="Sorry, Insufficient Balance!";
            return false;
        }
        else if((balancenew-withamnt)<2000){
            document.getElementById('disp2').innerHTML="Sorry! You are strictly asked to maintain the minimum balance of Rs.2000. Hence as per your current balance Rs." +balancenew+", you shall withdraw upto maximum of Rs."+(balancenew-2000)+" only.";
            return false;
        }
        else{
        balancenew = balancenew - withamnt;
        document.getElementById('disp2').innerHTML="Amount withdrawn successfully! And your current balance is Rs." + balancenew;
    }
}
    function balanc(){
        document.getElementById('disp2').style.display='none';
        document.getElementById('disp1').style.display='none';
        document.getElementById('baldisp').style.display='block';
        document.getElementById('baldisp').innerHTML="Your current balance is Rs."+ balancenew;
    }
    function exit(){
        action="bankexitpage.php";
    }

    function nextpage(){
        document.getElementById('proceedbutton2').style.display='none';
        document.getElementById('visible').style.display='block';
    }

</script>
</body>
</html>
