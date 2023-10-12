<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Savings Account</title>
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
            background-image: linear-gradient(to right, #024277, navy, blue, #024277, #759fc2, navy);
            /* background-color: #0063b0; */
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
        .agree{
            color:navy;
            text-align: center;
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
        .atlast{
            background-color: rgb(238, 234, 230);
            height: 500px;
            width:1000px;
            padding:20px;
            margin-left: 220px;
            color:navy;
            box-shadow: 2px 2px 10px 3px grey;
        }
        .atlastdiv{
            width:950px;
            height:350px;
            /* border:2px solid black; */
            display: flex;
            flex-wrap: wrap;
            padding:20px;
            text-align: center;
            justify-content: center;
        }
        .atlastdiv div{
            width:400px; height:18;
            border:2px dotted navy;
            margin:20px;
            border-radius:20px;
            text-align: center;
            padding-top:30px;
        }
        .atlastdiv div:hover{
            transform: scale(1, 1.2);
            background-color: lightblue;
            box-shadow: inset 8px 8px 15px 15px rgb(111, 215, 223);
        }
        tel{
            border:2px solid black;
            background-color: white;
        }
        .footer{
            background-color: #004c85;
            color:white;
            font-weight: bolder;
            font-size: large;
            width: 100%;
            height:30px;
            padding:10px;
            position:sticky;
            bottom:0px;
            display: flex;
            align-items: center;
        }
        
        fieldset{
            width:800px;
            margin-left:320px;
            background-image: linear-gradient(to top right, rgb(133, 194, 214), rgb(93, 193, 226), rgb(41, 134, 196));
            box-shadow: 3px 3px 25px #0063B2;
            border-color: #004c85;
            font-size: 20px;
            font-weight: 900;
        }
        small{
            color:rgb(236, 234, 234);
            font-weight:200;
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
    <center><h1>WELCOME TO HDFC BANK</h1></center>

    <form name="testing" onsubmit="return checks()" action="savingsdatabase.php" method="post">
        <fieldset>
            <legend style="color:navy; font-weight:bolder; font-size: 20px;">
                NEW REGISTRATION
            </legend>
            <table>
           <tr><td>FIRST NAME<br><small>(Name as per Aadhar)</small></td><td></td> <td><input type="text" name="first" placeholder="First name"></td></tr>
           
           <tr><td>LAST NAME<br><small>(as per Aadhar)</small></td><td></td> <td><input type="text" name="last" placeholder="Last name"></td></tr>
           
           <tr><td>YOUR DOB<br><small>(as per KYC)</small></td><td></td> <td><input type="date" max="2005-12-31" name="dob" placeholder="dd-mm-yyyy"></td></tr>
           
           <tr><td>NATIONALITY</td><td></td> 
           <td>
            <input type="radio" name="pop">Indian
            <input type="radio" name="pop" id="other">Others
           </td>
           </tr>
           <tr><td>EMAIL ID</td><td></td><td><input type="email" name="mailcheck" placeholder="Email"></td></tr>
            <tr><td>UPLOAD AADHAR<br><small>(only pdf format is allowed / should not be more than 100KB)</small></td><td></td>
            <td><input type="file" name="aadhar" accept=".jpg, .pdf"></td></tr>
            <tr><td>UPLOAD PAN CARD<br><small>(only pdf format is allowed / should not be more than 100KB)</small></td><td></td>
            <td><input type="file" name="pan"  accept=".jpg, .pdf"></td></tr>
            <tr><td>UPLOAD YOUR PHOTO<br><small>(jpeg, jpg, png / should not be more than 20KB/ not taken before 6months from current date)</small></td><td></td>
            <td><input type="file" name="photo"  accept=".jpeg, .jpg, .png"></td></tr>
            <tr><td>UPLOAD YOUR SIGNATURE<br><small>(jpeg, jpg, png / should not be more than 20KB)</small></td><td></td>
             <td><input type="file" name="sign" accept=".jpeg, .jpg, .png"></td></tr>
           <tr><td>AADHAR LINKED MOBILE NUMBER</td><td></td> <td><tel>+91</tel>&nbsp<input type="number" name="numb"></td></tr>
           <tr><td colspan="2"><small>(We will be sending you an OTP to this number, please keep it handy)</small></td></tr>
        </table>
        <br>
        <center>             
            <input type="reset" value="Clear" class="sub" style="padding-left: 30px; padding-right: 30px;">&nbsp; &nbsp;
            <input type="submit" value="Submit and Get OTP >>" class="sub" >
        </center>
        </fieldset>

        <h4 class="agree">By submitting, I confirm that I am an Indian above 18 years of age, residing in <br>
            India and have read & agreed to <span style="font-weight: 200;"><u>HDFC Bank Privacy Policy</u></span> and <span style="font-weight: 200;"><u>T&C</u></span>. I agree to<br> 
            receive calls, SMS & WhatsApp messages from HDFC Bank, and this consent <br>
            overrides any registration for DNC / NDNC.</h4>
    </form>
    
    <div class="atlast">
        <h3>Open your Savings A/c instantly</h3>

           <h3>With Aadhaar, open your account instantly, Online.</h3> 
            
            <h3>To open an account you should be:</h3>
        <div class="atlastdiv">
        <div><i class="material-icons" style="font-size:50px;">event</i><br>
        18 years and above</div>        
        <div><i class="material-icons" style="font-size:50px;">person</i><br>
            Indian Resident individual</div>
        <div><i class="material-icons" style="font-size:50px;">sticky_note_2</i><br>
            Wish to open an account instantly verified with Aadhaar</div>
        <div><i class="material-icons" style="font-size:50px;">remember_me</i><br>
            Have original PAN Card</div>
        </div>
    </div>
    <br>
    <div class="footer">
        @copyright HDFC Bank Ltd.
    </div>
   <!-- jscript -->
   <script>
    function checks(){
    document.getElementById('other').value;
    let newnumb=document.testing.numb.value;
    let length1=newnumb.length;
    let mailcheck=document.testing.mailcheck.value;
    let first=document.testing.first.value;
    let last=document.testing.last.value;
    let dob=document.testing.dob.value;
    let aadhar=document.testing.aadhar.value;
    let photo=document.testing.photo.value;
    let sign=document.testing.sign.value;
    let pan=document.testing.pan.value;
    // let validatemail = /^(([a-zA-Z0-9\._#$*]+)@([a-zA-Z]+).([a-zA-Z]+))$/;
        
    if(other.checked){
        alert("If you are not an Indian, you are not eligible to open an account in HDFC Bank!");
        return false;
    }
    else if(typeof first === "number"){
        alert("Numbers are not allowed");
        return false;
    }
    else if(length1>10){
        alert("Aadhar linked mobile number should not be more than 10 digits. Please check!");
        return false;
    }
    else if(length1<10 && length1>0){
        alert("Aadhar linked mobile number should not be less than 10 digits. Please check!");
        return false;
    }
    else if(first==null ||first==""){
        alert("Enter your first name, it should not be empty!");
        return false;
    }
    else if(last==null ||last==""){
        alert("Enter your last name, it should not be empty!");
        return false;
    }
    else if(dob==null ||dob==""){
        alert("Please enter your Date of Birth, it should not be empty!");
        return false;
    }
    else if(mailcheck=null ||mailcheck==""){
        alert("Please enter your email address, it should not be empty!");
        return false;
    }
    else if(aadhar==null ||aadhar==""){
        alert("Please upload your Aadhar, it should not be empty!");
        return false;
    }
    else if(pan==null ||pan==""){
        alert("Please upload your PAN card, it should not be empty!");
        return false;
    }
    else if(photo==null ||photo==""){
        alert("Please upload your photo, it should not be empty!");
        return false;
    }
    else if(sign==null ||sign==""){
        alert("Please upload your signature, it should not be empty!");
        return false;
    }
    else if(newnumb==null ||newnumb==""){
        alert("Enter your aadhar linked mobile number, it should not be empty!");
        return false;
    }
    // else if(!validatemail.test(mailcheck)){
    //     alert("Please check your email address. Seems not valid!");
    //     return false;
    // }
    // document.write("Thank you! Your form is submitted successfully and you will be getting an OTP to your aadhar linked mobile number.");
        alert("Thank you! Your form is submitted successfully and you will be getting an OTP to your aadhar linked mobile number.");
}
   </script>
</body>
</html>
