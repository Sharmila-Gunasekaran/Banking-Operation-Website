<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine|Roboto|Caprasimo|Abril Fatface">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='styling.css'>
    <style>
         .sub{
            background-image: linear-gradient(to right, green, rgb(121, 236, 121), green);
            padding:5px 15px;
            border-radius: 25px;
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
<div id='navdown' style='background-color: #0063b0;'>        
        <img class='img-fluid' src="hdfc lady2.jpg" height="70px" width="400px">  
        <div style="text-shadow: 5px 3px 3px rgb(201, 36, 36); line-height:'1.5'; padding:10px;">      
        <p>We have upgraded.  You should too.</p>
        <p style="font-size:20px; font-weight:500;">Open your Account NOW!</p></div>
</div>
<center>
<div id='extranav'>
       <div>Manage your Debit & Credit card <i class="material-icons" style="font-size:36px; color:red;">account_balance_wallet</i></div>
       <div><i class="material-icons" style="font-size:36px; color:red;">touch_app</i> One touch log-in
        <p>--------------</p>
        <i class="material-icons" style="font-size:36px; color:red;">tune</i> Set card controls and<p>usage limits</p></div>
       <div><i class="material-icons" style="font-size:36px; color:red;">contactless</i> View transactions,<p>statements and reward points</p></div>
       <div><i class="material-icons" style="font-size:80px; color:white;" >qr_code_2</i></div>
</div>
</center>

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

$var1="SELECT * FROM Savingss WHERE Accountnumber = '$Accountnum'";
$query=$conn->query($var1);

if($query->num_rows>0){
while($element = mysqli_fetch_array($query)){
    if($element['PINnumber']==$pin){
        echo "<center> <button class='sub' id='proceedbutton2' onclick='return nextpage()'>PROCEED</button></center>";
    }
    else{
        echo "<center><h3>PIN INCORRECT. PLEASE CHECK!</h3></center>";
    }
}}
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
