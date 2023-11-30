<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pin validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine|Roboto|Caprasimo|Abril Fatface">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='styling.css'>
    <style>
        .pin{
            min-height:300px; max-width:500px;
            border:2px solid grey;
            margin-top:2%;
            box-shadow: 3px 3px 6px grey;
            border-radius: 30px;
            display:none;
        }
        .sub{
            background-image: linear-gradient(to right, green, rgb(121, 236, 121), green);
            padding:5px 15px;
            margin:2% 0;
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
        <div style="line-height:'1.5'; padding:10px;">      
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

$var1="SELECT * FROM Savingss WHERE Accountnumber = '$Accountnum'";
$query=$conn->query($var1);

if($query->num_rows>0){
while($element = mysqli_fetch_array($query)){
    if($element['Firstname']==$Firstname){
        if($element['Lastname']==$Lastname){            
                echo "<center> <button class='sub' id='proceedbutton' onclick='return nextpage()'>PROCEED</button></center>";
        }
        else{
            echo "<center><h2>Your Name doesn't match with this Account number! Please check.</h2></center>";
        }
    }
    else{
        echo "<center><h2>Your Name doesn't match with this Account number! Please check.</h2></center>";
    }
}
}
else{
    echo "<center><h2>No records found! Please check your Account number. If you don't have an account in HDFC Bank,
     then open an account instantly using your AADHAR now!</h2></center>";
}
?>

<center>
<div class="pin" id="pin1">
    <h3 style="font-weight:bolder;"> ENTER YOUR 4 DIGIT PIN NUMBER</h3><br>
    <form name="myform" onsubmit="return validation()" action="bankdeposit.php" method="post">
        <input type="number" name="pinnumb" placeholder="Enter your pin number" size="40px" style=" font-size:large; font-weight:900; padding:20px 35px; text-align: center;">
        <input type="text" hidden name="accountnumber" value="<?php echo $Accountnum;?>">
        <br>
        <h3 id="error"></h3>
        <br>
        <div style="font-size:28px; font-weight:800;">
        <input type="radio" name="same" id="cash">Cash&nbsp;&nbsp;<input type="radio" id="cheque" name="same">Cheque<br>
        </div>
        <input type="submit" class="sub" value="SUBMIT">
    </form>
</div>
</center>
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
