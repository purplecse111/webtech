<!DOCTYPE html>
<html>
<body>
<?php
class Company {
  public $name;
  public $Email;
  public $User Name;
  public $Password;
  public $Confirm Password;
  public $Gender;
  public $Date of Birth;

  function __construct($name) {
    $this->name = $name;
  }
   <?php
PUBLIC HOME:

class xCompany {
  public $name;
  public $color;

  function __construct($Company) {
    $this->Company = $Company;
  }

  }
  function __destruct() {
    echo "Welcome to x{$this->Company}.";

$Company = new Company("xCompany");

$name = $email = $user name = $password = $confirm password = "";

if ($_REGISTRATION["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $user name = test_input($_POST["user name"]);
  $password = test_input($_POST["password"]);
  $confirm password = test_input($_POST["confirm password"]);
}
 <form method="post" action="<?php echo $_REGISTRATION["PHP_SELF"];?>">

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["user name"])) {
    $user name = "";
  } else {
    $user name = test_input($_POST["user name"]);
  }

  if (empty($_POST["password"])) {
    $password = "";
  } else {
    $passwordt = test_input($_POST["password"]);
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["user name"])) {
    $user name = "";
  } else {
    $user name = test_input($_POST[" user name"]);
  }

  if (empty($_POST["password"])) {
    $password = "";
  } else {
    $password = test_input($_POST["password"]);
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["user name"])) {
    $user name = "";
  } else {
    $user name = test_input($_POST["user name"]);
  }

  if (empty($_POST["password"])) {
    $password = "";
  } else {
    $password = test_input($_POST["password"]);
  }

  if(empty($_POST["confirm password"]);
  $confirm password = "";
  }else {
  $confirm password = test_input($_POST["confirm password"]);
  }

  if(empty($_POST["gender"]);
  $gender = "";
  }else {
  $confirm password = test_input($_POST["gender"]);
  }

  if(empty ($_POST["date of birth"]);
  $date of birth = "";
  }else{
  $date of birth = test_input($_POST["date of birth"]);
  }



<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  User Name: <input type="text" name="user name">
  <span class="error"><?php echo $user nameErr;?></span>
  <br><br>
  Password: <input type="text" name="password">
  <span class="error"><?php echo $passwordErr;?></span>
  <br><br>

  Confirm Password: <input type="text" name="confirm password">
  <span class="error"><?php echo $confirm passwordErr;?></span>
  <br><br>


  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>


   Date of Birth:
   <input type="radio" name="date ";
   <input type="radio" name="month";
   <input type="radio" name="year";



  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $user name;
echo "<br>";
echo $password;
echo "<br>";
echo $confirm password;
echo "<br>";
echo $gender;
echo "<br>";
echo $date of birth;
echo "<br>";
?>
<form action="action_page.php" style="border:1px solid #ccc">
  <div class="container">

<h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="usrnm"><b>User Name</b></label>
    <input type="text" placeholder="User Name" name="usrnm" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="rmme"><b>Remember Me</b></label>
    <input type="remember me" placeholder="Remember Me" name="rmme" required>



    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

 <div class="clearfix">
      <button type="button" class="forgtpasswd">Forgot Password</button>
      <button type="submit" class="login">Login</button>
    </div>
  </div>
</form>
?>
<h1>Forgot Password</h1>
<label for="enterEmail">Enter Email:</label>
<input type="email" id="enterEmail" name="enterEmail" title="Confirm new email" />

.error{color:#Home|Login|Registration;}

<p class="form-actions">
<input type="submit" value="Change Password" title="Change password" />
</p>


<h1>dashboard</h1>

<i class="Dashboard">dashboard</i>
<i class="Veiw Profile">dashboard</i>
<i class="Edit Profile">dashboard</i>

<i class="material-icons","Change Profile Picture"<dashboard</i>
<i class="material-icons","Change Password"<dashboard</>
<i class="material-icons","Logout"<dasboard</>
<i class="material-icons" style=color:blue">dashboard</i>

<p>Used on a button:</p>
<button style="font-size:24px">Button <i class="material-icons">dashboard</i></button>

<p>Unicode:</p>
<i class="material-icons">&#xe871;</i>
 <div class="small-img">
  <form action="/action_page.php" class="container">
    <h1>Login</h1>
     <div class="bg-img">
      <div class="bg-img">
  <form action="/action_page.php" class="Account">
  <i class="Dashboard">dashboard</i>
<i class="Veiw Profile">dashboard</i>
<i class="Edit Profile">dashboard</i>
<i class="Choose File">dashboard</i>
<i class="No file chosen">dashboard</i>
<input type="Submit" value="Change Password" title="Change password" />



  form action="/action_page.php">


    <label for="psw">Password</label>
  <  input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
form action="/action_page.php">
    <label for="nwpswd">New Password</label>
    <input type="new password" id="nwpswd" name="nwpswd" required>(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
form action="/action_page.php">

    <label for="retypnwpswd">Re-Type New Password</label>
  <  input type="re-type new password" id="retypnwpswd" name="retypnwpswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
form action="/action_page.php">

    <input type="submit" value="Submit">



  </form>
</div>

}
</body>
</html>

