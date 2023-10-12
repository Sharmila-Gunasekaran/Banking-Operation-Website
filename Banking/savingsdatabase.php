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

// $var1="CREATE TABLE Savings (Firstname varchar(40), Lastname varchar(40), DOB date, EmailID varchar(40), Aadharcard  LONGBLOB,
// Pancard BLOB, Photo BLOB, Sign BLOB, Mobile varchar(10) )";
// if($conn->query($var1)==true){
//  echo "fields added!";
// }
// else{
//     echo "fields not created, pls check!";
// }

$var2="INSERT INTO Savings (Firstname, Lastname, DOB, EmailID, Aadharcard, Pancard, Photo, Sign, Mobile)
VALUES('$Firstname', '$Lastname', '$DOB', '$Email', '$Aadhar', '$Pan', '$Photo', '$Signature', '$Mobile')";
$query=$conn->query($var2);
// if($query==true){
//     echo "Values are inserted!";
// }
// else{
//     echo "values not inserted, pls check!";
// }


// $var4="ALTER TABLE Savings ADD (Accountnumber varchar(20), PINnumber varchar(30))";
// $query=$conn->query($var4);
// if($query==true){
//     echo "new col inserted!";
// }
// else{
//     echo "not inserted!";
// }

$var3="ALTER TABLE Savings MODIFY Accountnumber INT AUTO_INCREMENT";
$query=$conn->query($var3);

$var5="ALTER TABLE Savings AUTO_INCREMENT=121314150";
$query2=$conn->query($var5);

// $var6="ALTER TABLE Savings ADD PRIMARY KEY (Accountnumber)";
// $query3=$conn->query($var6);

$var2="SELECT MAX(Accountnumber) FROM Savings";
        $query1=$conn->query($var2);

        $element=mysqli_fetch_array($query1);
        $maxAccountNumber=$element[0];

// $var4="DELETE FROM Savings WHERE PINnumber IS NULL";
// $query5=$conn->query($var4);

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
        fieldset{
            font-size:27px;
            font-weight:bolder;
            background-image: linear-gradient(to top right, blue, rgb(133, 194, 214), rgb(93, 193, 226), rgb(41, 134, 196));
            box-shadow: 3px 3px 15px grey;
            /* border-color: #004c85; */
        }
        input{
            padding:4px;
            font-size:20px;
            color:white;
            background-image: linear-gradient(to bottom left, lightblue, #0063b0, navy, #0063B2);
            border: 2px solid black;
            /* font-weight:4px; */
        }
        .sub{
            background-image: linear-gradient(to right, green, rgb(121, 236, 121), green);
            padding:10px;
            border-radius: 25px;
            font-size:large;
            color:white;
            border-color:green;
        }
        .sub:hover{
            transform: scale(1.1, 1.1);
        }
        .accountcr{
            background-image: linear-gradient(to top right, blue, rgb(133, 194, 214), rgb(93, 193, 226), rgb(41, 134, 196));
            box-shadow: 3px 3px 10px grey;
            height:250px;
            width:600px;
            border:2px solid black;
            padding:30px;
            display:none;
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

    <center>
    <form onsubmit="return submitOTP()" name="otpform">
    <label style="font-size: 25px; font-weight: bold;">ENTER YOUR OTP</label>
    <input type="text" id="otpInput" autofocus placeholder="Enter OTP" size="25">
    <input type="submit" value="SUBMIT" class="sub">
    <h3 id="verifying">VERIFYING...</h3>
    </form>    
    </center>
    <br>

    <center>
    <form name="accountform" class="accountcr">
    <div id="view">
        <table>
       <tr> <td><label style="font-size: 25px; font-weight: bold;">Your Account Number</label></td><td><textarea id="accnum" rows="2" cols="30" >
      <?php
        echo $maxAccountNumber;
       ?> </textarea></td></tr>
       <tr> <td><label style="font-size: 25px; font-weight: bold;">Your IFSC Number</label></td><td><input type="text" value="HDFC00356"></td></tr>
        <br><br><tr><td style="position:relative; left:180px; top:25px;"><input type="button" value="Noted, Proceed" class="sub" onclick="secondstage()"></td></tr>
    </table>
    </div>
    </form>
    </center>

    <form name="pinform"  onsubmit="return validatepin()" style="display:none;" action="savingdone.php" method="post">
    <fieldset>
    <center> <legend style="text-shadow: 3px 5px 8px black; ">CREATE YOUR PIN</legend><br>
    <table>
    <tr><td><label style="font-size:20px;"> ENTER 4 DIGIT PIN OF YOUR CHOICE </label></td><td> <input type="number" autofocus size="30" name="pinno"></td></tr>
    <tr><td><label style="font-size:20px;"> RE-ENTER 4 DIGIT PIN </label></td><td> <input type="password" size="20" name="pinno2"> </td></tr>
    </table><br>
    <input type="text" hidden value="<?php echo $maxAccountNumber;?>" name="numo">
    <input type="reset" class="sub" value="CLEAR"> <input type="submit" value="CONFIRM" class="sub" name='submitbutton'>
    </center>
    </fieldset>
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