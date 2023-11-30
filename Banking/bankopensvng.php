<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savings Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='styling.css'>
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
            <tr><td>UPLOAD YOUR PHOTO<br><small>(jpg, png / should not be more than 20KB/ not taken before 6months from current date)</small></td><td></td>
            <td><input type="file" name="photo"  accept=".jpg, .png"></td></tr>
            <tr><td>UPLOAD YOUR SIGNATURE<br><small>(jpg, png / should not be more than 20KB)</small></td><td></td>
             <td><input type="file" name="sign" accept=".jpg, .png"></td></tr>
           <tr><td>AADHAR LINKED MOBILE NUMBER</td><td></td> <td><tel>+91</tel>&nbsp<input type="number" name="numb"></td></tr>
           <tr><td colspan="2"><small>(We will be sending you an OTP to this number, please keep it handy)</small></td></tr>
        </table>
        <br>
        <center>             
            <input type="reset" value="Clear" class="sub" style="padding-left: 30px; padding-right: 30px;">&nbsp; &nbsp;
            <input type="submit" value="Submit and Get OTP >>" class="sub" >
        </center>
        </fieldset>
        <br>
        <h6 style='color:navy'>By submitting, I confirm that I am an Indian above 18 years of age, residing in <br>
            India and have read & agreed to <span style="font-weight: 200;"><u>HDFC Bank Privacy Policy</u></span> and <span style="font-weight: 200;"><u>T&C</u></span>. I agree to<br> 
            receive calls, SMS & WhatsApp messages from HDFC Bank, and this consent <br>
            overrides any registration for DNC / NDNC.</h6>
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
</center>

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
    alert("Thank you! Your form is submitted successfully and you will be getting an OTP to your aadhar linked mobile number.");
}
   </script>
</body>
</html>
