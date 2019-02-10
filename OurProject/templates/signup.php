<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 25%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

<form action="register.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Full Name</b></label> <br>
    <input type="text" placeholder="Enter Full Name" name="name" required> <br>

    <label for="phone"><b>Phone Number</b></label> <br>
    <input type="text" placeholder="Enter US Phone Number" name="phone" required> <br>

    <label for="email"><b>Email</b></label> <br>
    <input type="text" placeholder="Enter Email" name="email" required> <br>

    <label for="address"><b>Street Address: </b></label> <br>
    <input type="text" name="address" placeholder="Enter Street Address" required> <br>

    <label for="city"><b>City: </b></label> <br>
    <input type="text" name="city" placeholder="Enter City" required> <br>

    <label for="state"><b>State: </b></label> <br>
    <input type="text" name="state" placeholder="Enter State" required> <br>

    <label for="zipcode"><b>Zip Code: </b></label> <br>
    <input type="text" name="zipcode" placeholder="Enter Zip Code" required> <br>

    <label for="role"><b>Role: </b></label> <br>
    <input type="text" name="role" list="rolename">

    <datalist id="rolename" name="role">
      <option value="Farmer"></option>
      <option value="Customer"></option>
    </datalist> <br>

    <label for="psw"><b>Password</b></label> <br>
    <input type="password" placeholder="Enter Password" name="password" required> <br>

    <label for="psw-repeat"><b>Repeat Password</b></label> <br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required> <br>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>
