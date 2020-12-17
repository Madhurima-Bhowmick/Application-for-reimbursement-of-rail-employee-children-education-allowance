vc<?php
include('student.php')
?>

<html>

<head>
  <title>Sign Up</title>
  <script type="text/javascript">
    function checkForm(form) {

      if (form.username.value == "") {
        alert("Error: Username cannot be blank!");
        form.username.focus();
        return false;
        <?php $_SESSION['val'] = 0; ?>
      }
      re = /^\w+$/;
      if (!re.test(form.username.value)) {
        alert("Error: Username must contain only letters, numbers and underscores!");
        form.username.focus();
        return false;
        <?php $_SESSION['val'] = 0; ?>
      }

      if (form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
        if (form.pwd1.value.length < 8) {
          alert("Error: Password must contain at least eight characters!");
          form.pwd1.focus();
          return false;
          <?php $_SESSION['val'] = 0; ?>
        }
        if (form.pwd1.value == form.username.value) {
          alert("Error: Password must be different from Username!");
          form.pwd1.focus();
          return false;
          <?php $_SESSION['val'] = 0; ?>
        }
        re = /[0-9]/;
        if (!re.test(form.pwd1.value)) {
          alert("Error: password must contain at least one number (0-9)!");
          form.pwd1.focus();
          return false;
          <?php $_SESSION['val'] = 0; ?>
        }
        re = /[a-z]/;
        if (!re.test(form.pwd1.value)) {
          alert("Error: password must contain at least one lowercase letter (a-z)!");
          form.pwd1.focus();
          return false;
          <?php $_SESSION['val'] = 0; ?>
        }
        re = /[A-Z]/;
        if (!re.test(form.pwd1.value)) {
          alert("Error: password must contain at least one uppercase letter (A-Z)!");
          form.pwd1.focus();
          return false;
          <?php $_SESSION['val'] = 0; ?>
        }
      } else {
        alert("Error: Please check that you've entered and confirmed your password!");
        form.pwd1.focus();
        return false;
        <?php $_SESSION['val'] = 0; ?>
      }

      alert("You entered a valid password. ");
      <?php $_SESSION['val'] = 1; ?>
      return true;
    }
  </script>
  <style>
    #wrapper {
      width: 100%;
      margin: 0px auto;

    }

    #header {
      width: 100%;
      height: 80px;
      background-color: cornflowerblue;
    }

    #abc {
      width: 100%;
      height: 650px;
      background-color: ghostwhite;
      float: left;
    }

    .box {
      background-color: deepskyblue;
      color: white;
      width: 150px;
      height: 30px;

    }

    .heighttext {
      height: 50px
    }
  </style>
</head>

<body>
  <form method="post" onsubmit="return checkForm(this);" action="application.php">
    <div id="wrapper">
      <div id="header">
        <table align="left">
        </table>
      </div>
      <div id="abc">
        <table align="center">
          <tr>
            <table align="center">
              <tr>
                <td>
                  <h1>Create your account</h1>
                </td>
              </tr>
            </table>
          </tr>
          <tr>
            <table align="center" style="border:1px ghostwhite;
                                           border-collapse:collapse;
                                           background-color:white;">

              <td>Username</td>
          </tr>
          <tr>
            <td><input type="text" name="username" size="50" class="heighttext"></td>
          </tr>
          <tr>
            <td>Email address</td>
          </tr>
          <tr>
            <td><input type="text" name="email" size="50" class="heighttext"></td>
          </tr>
          <tr>
            <td>MobNo</td>
          </tr>
          <tr>
            <td><input type="text" name="MobNo" size="50" class="heighttext"></td>
          </tr>
          <tr>
            <td>Choose a password</td>
          </tr>
          <tr>
            <td><input type="password" name="Password" size="50" class="heighttext" placeholder="Your Password" /></td>
          </tr>

          <tr>
            <td>Confirm your password</td>
          </tr>
          <tr>
            <td><input type="password" name="pwd2" size="50" class="heighttext" placeholder="Re-enter Your Password" /></td>
          </tr>
        </table>
      </div>
      <tr>
        <table align="center">
          <tr>
            <td></td>
            <td><input type="submit" name="submitBtn" value="Continue" class="box"> </td>
          </tr>
        </table>
      </tr>

    </div>
    <div id="footer">
    </div>

  </form>



</body>

</html>
<?php
if (!empty($_REQUEST['submitBtn']) && $_SESSION['val'] == 1) {
  //echo "hello";
  $username = $_REQUEST['username'];
  $email = $_REQUEST['email'];
  $MobNo = $_REQUEST['MobNo'];
  $password = $_REQUEST['Password'];
  echo $username;
  echo $email;
  echo $MobNo;
  echo $password;

  $sql = "INSERT INTO application (username,email,MobNo,Password) VALUES('','$username','$email','$MobNo','$password')";
  mysqli_query($conn, $sql);
  //echo "hello";
}
?>