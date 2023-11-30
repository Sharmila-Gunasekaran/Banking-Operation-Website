<?php
$Firstname=$_POST['first'];
$Lastname=$_POST['last'];
$DOB=$_POST['dob'];
$Email=$_POST['mailcheck'];
$Aadhar=$_POST['aadhar'];
$Pan=$_POST['pan'];
$Photo=$_POST['photo'];
$Signature=$_POST['sign'];
$Mobile=$_POST['numb'];


$conn=new mysqli("localhost", "root", "", "test" );
// if($conn->connect_error){
//     echo "Not connected". $conn->connect_error;
// }
// else{
//     echo "Database connected successfully!";
// }

// $var1="CREATE TABLE Savingss (Firstname varchar(40), Lastname varchar(40), DOB date, EmailID varchar(40), Aadharcard  LONGBLOB,
// Pancard BLOB, Photo BLOB, Sign BLOB, Mobile varchar(10),
//  Accountnumber INT AUTO_INCREMENT PRIMARY KEY, PINnumber varchar(30))AUTO_INCREMENT=121314150";
// if($conn->query($var1)==true){
//  echo "fields added!";
// }
// else{
//     echo "fields not created, pls check!";
// }
$var2="INSERT INTO Savingss (Firstname, Lastname, DOB, EmailID, Aadharcard, Pancard, Photo, Sign, Mobile)
VALUES('$Firstname', '$Lastname', '$DOB', '$Email', '$Aadhar', '$Pan', '$Photo', '$Signature', '$Mobile')";
$query=$conn->query($var2);
// if($query==true){
//     echo "Values are inserted!";
// }
// else{
//     echo "values not inserted, pls check!";
// }
$var2="SELECT MAX(Accountnumber) FROM Savingss";
        $query1=$conn->query($var2);

        $element=mysqli_fetch_array($query1);
        $maxAccountNumber=$element[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine|Roboto|Caprasimo|Abril Fatface">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='styling.css'>
    <style>
        form{
            font-size:27px;
            font-weight:bolder;
            box-shadow: 3px 3px 15px grey;
            border:none;
            width:60%;
            min-height:250px;
            margin-top:3%;
            text-align:center;
        }
        input{
            padding:4px;
            font-size:20px;
            color:black;
            width:80%;
            border: 2px solid black;
        }
        .sub{
            background-image: linear-gradient(to right, green, rgb(121, 236, 121), green);
            padding:10px;
            border-radius: 25px;
            font-size:large;
            color:white;
            min-width:100px;
            max-width:120px;
            border-color:green;
            margin-bottom:2%;
        }
        .sub:hover{
            transform: scale(1.1, 1.1);
        }
        .accountcr{
            box-shadow: 3px 3px 10px grey;
            min-height:250px;
            max-width:600px;
            border:2px solid black;
            display:none;
            padding:10px;
        }
        #verifying{
            animation: verify 3s linear 4;
            display:none;
        }
        @keyframes verify{
            0%{
                opacity:0.4;
                color:red;
            }
            50%{
                opacity:0.7;
                color:olive;
            }
            100%{
                opacity:1;
                color:navy;
            }
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
<center>
    <form onsubmit="return submitOTP()" name="otpform">
    <label style="font-size: 25px; font-weight: bold;">ENTER YOUR OTP</label>
    <input type="text" id="otpInput" autofocus placeholder="Enter OTP"><br>
    <button type="submit" class="sub" style='margin-top:2%'>SUBMIT</button>
    <h5 id="verifying">VERIFYING...</h5>
    </form>    
</center>
    <br>

<center>
    <form name="accountform" class="accountcr">
    <div>
        <table>
       <tr> <td><label style="font-size: 25px; font-weight: bold;">Your Account Number</label></td><td><textarea id="accnum" rows="2" cols="10" >
      <?php
        echo $maxAccountNumber;
       ?> </textarea></td></tr>
       <tr> <td><label style="font-size: 25px; font-weight: bold;">Your IFSC Number</label></td><td><input type="text" value="HDFC00356"></td></tr>
    </table><br>
    <button type="button" class="sub" onclick="secondstage()">Noted, proceed</button>
    </div>
    </form>
</center>
<center>
    <form name="pinform"  onsubmit="return validatepin()" style="display:none; padding:10px;" action="savingdone.php" method="post">
 <legend style="text-shadow: 3px 5px 8px black; ">CREATE YOUR PIN</legend><br>
    <table>
    <tr><td><label style="font-size:20px;"> ENTER 4 DIGIT PIN OF YOUR CHOICE </label></td><td> <input type="number" autofocus size="30" name="pinno"></td></tr>
    <tr><td><label style="font-size:20px;"> RE-ENTER 4 DIGIT PIN </label></td><td> <input type="password" size="20" name="pinno2"> </td></tr>
    </table><br>
    <input type="text" hidden value="<?php echo $maxAccountNumber;?>" name="numo">
    <input type="reset" class="sub" value="CLEAR"> <input type="submit" value="CONFIRM" class="sub" name='submitbutton'>
</center>
    </form>
    <br><br>
    
    <script>        
    function submitOTP() {            
        otp = document.getElementById('otpInput').value;      
        
        if(otp == "" || otp==null){
            alert("Please enter the OTP first!");
            return false;
        }
        else {
            aftersubmitOTP();
            return false;
        }
    }
    function aftersubmitOTP(){
        document.getElementById('verifying').style.display='block';
    }

    let animi=document.getElementById('verifying');
    let animationCounter = 1;
    animi.addEventListener('animationiteration', function(event){
        if(event.animationName === 'verify'){
            animationCounter++;
            if(animationCounter>=4){
                document.getElementById('verifying').style.display='none';
                document.otpform.style.display="none";
                document.accountform.style.display='block';
            }          
        }
    });

        function validatepin(){
        let firstpin=document.pinform.pinno.value;
        let secondpin= document.pinform.pinno2.value;
        let length1= firstpin.length;
        
        if(firstpin == null || firstpin == ""){
            alert("Please enter your PIN. It should not be empty!");
            return false;
        }
        else if(secondpin == "" || secondpin == null ){
            alert("Please re-enter your pin. It should not be empty!");
            return false;
        }
        else if(length1>4 || length1<4){
            alert("Entered PIN should be strictly of 4 digits!");
            return false;
        }
        else if(firstpin == 0000){
            alert("Please enter a valid input!");
            return false;
        }
        else if(firstpin != secondpin){
            alert("PIN doesn't match! Please Re-enter your PIN");
            return false;
        }        
    }    
        function secondstage(){            
            document.pinform.style.display="block";
            document.accountform.style.display='none';            
        } 
    </script>

</body>
</html>
