<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Registeration Form</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <form class="signup-form" action="register.php" method="post">
      <!-- form header -->
      <div class="form-header">
        <h1>Registration for vaccine</h1>
		<font color="white">  
      </div>
      <!-- form body -->
      <div class="form-body">
        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="firstname" class="label-title">First name *</label>
            <input type="text" id="firstname" name="firstname" class="form-input" placeholder="enter your first name" required="required" />
          </div>
          <div class="form-group right">
            <label for="lastname" class="label-title">Last name</label>
            <input type="text" id="lastname" name="lastname"  class="form-input" placeholder="enter your last name" />
          </div>
        </div>
        <!-- Email -->
        <div class="form-group">
          <label for="email" class="label-title">Email*</label>
          <input type="email" id="email" name="email"  class="form-input" placeholder="enter your email" required="required">
        </div>
		<div class="form-group">
          <label for="confirm_email" class="label-title">Confirm Email*</label>
          <input type="email" id="confirm_email" name="confirm_email"  class="form-input" onfocusout="myFunction()" placeholder="enter your email again" required="required">
        </div>
        <!-- Passwrod and confirm password -->
      
		 <div class="horizontal-group">
          <div class="form-group left" >
            <label for="choose-file" class="label-title">Photo Id Proof*</label>
             <select class="form-input" id="level" name="photo_id_proof"  required="required" >
			 <option disabled selected value> -- Select an Id Proof --</option>
              <option value="Aadhar">Aadhar</option>
              <option value="PanCard">Pan Card</option>
              <option value="Passport">Passport</option>
            </select>
          </div>
		  <div class="form-group right">
            <label for="Photo_Id_Number" class="label-title"> Photo_Id_Number*</label>
            <input type="number" class="form-input" name="photo_id_number"  id="Photo_Id_Number" placeholder="Enter your Photo_Id_Number" required="required">
          </div>
          
        </div>
        <!-- Gender and Hobbies -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label class="label-title">Gender*:</label>
            <div class="input-group" name="gender"  required="required" style="color: white">
              <label for="male"><input type="radio" name="gender" value="male" id="male"> Male</label>
              <label for="female"><input type="radio" name="gender" value="female" id="female"> Female</label>
			   <label for="other"><input type="radio" name="gender" value="other" id="other">Others</label>
            </div>
          </div>
        </div>
        <!-- Profile picture and Age -->
        <div class="horizontal-group">
          <div class="form-group right">
            <label for="experience" class="label-title">Age*</label>
            <input type="number" name="age"  min="18" max="70"  value="" class="form-input" >
          </div>
        </div>
        <!-- Bio -->
        <div class="form-group">
          <label for="choose-file" class="label-title">Medical Issue</label>
          <textarea class="form-input" name="medical_issue"  rows="4" cols="50" style="height:auto"></textarea>
        </div>
      </div>
      <!-- form-footer -->
      <div class="form-footer">
        <span>* required</span>
        <button type="submit" class= "btn" name="save">Create</button>
      </div>
    </form>
<script>
function myFunction(){
	$email = document.getElementById("email").value;
	$confirm_email = document.getElementById("confirm_email").value;
	if($email!==$confirm_email){
		alert("Email did not match");
		document.getElementById("confirm_email").value='';
	}
	
}
</script>
  </body>
</html>