<?php
include('student.php');
global $fla;
if (!empty($_REQUEST['loginBtn']) || (!empty($_COOKIE['userName']) && !empty($_COOKIE['userPwd']))) {
    if (!empty($_COOKIE['userName']) && !empty($_COOKIE['userPwd'])) {
        $userName = $_COOKIE['userName'];
        $userPwd = $_COOKIE['userPwd'];
    } else {
        $userName = $_REQUEST['num1'];
        $userPwd = ($_REQUEST['num2']);
    }
    if ($_REQUEST['rem'] == 1) {
        setcookie('userName', $userName, time() + 3600);
        setcookie('userPwd', $userPwd, time() + 3600);
    }
    if (isset($_REQUEST['loginBtn'])) {
        $username = $_REQUEST['num1'];
        $userPwd = $_REQUEST['num2'];
        if ($username === 'admin' && $userPwd === 'Passwo12') {
            $_SESSION['login'] = 1;
            header('Location:application.php');
            $fla = 1;
        } {
            echo "Username and Password do not match.";
        }
    }

    $sql = "SELECT * FROM newpage";
    //$userName=$_REQUEST['num1'];
    //$userPwd=$_REQUEST['num2'];
    $result = mysqli_query($conn, $sql);
    $flag = 0;
    if ($result) {
        while ($rws = mysqli_fetch_array($result)) {
            if (((($rws[4] == $userName) || ($rws[5] == $userName)) && ($rws[6] == $userPwd)) || $fla == 1) {
                $flag = 1;
                break;
            } else
                $flag = 0;
        }
    }
    if ($flag == 0)
        $error = 1;
    else {
        $_SESSION['login'] = 1;
        $_SESSION['user_name'] = $userName;
        header('Location:application.php');
    }
}

?>
<html>

<head>
    <title>LOG IN</title>
    <style>
        #wrapper {
            width: 980px;
            margin: 0px auto;

        }

        #header {
            width: 80%;
            height: 80px;
            background-color: skyblue;
        }

        #abc {
            width: 80%;
            height: 150px;
            background-color: mintcream;
            float: left;
        }

        #footer {
            width: 80%;
            height: 140px;
            background-color: mintcream;
            float: left;
        }

        .button {
            background-color: mintcream;

        }
    </style>
</head>

<body>
    <form action="application.php" method="post">
        <div id="wrapper">
            <div id="header">
                <table align="center">
                    <tr>
                        <td>
                            <h1>LOG IN</h1>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="abc">
                <table align="center">
                    <tr>

                        <td>Email/User-name</td>
                        <td><input type="text" name="num1" class="box"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="num2" class="box"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="loginBtn" value="login"></td>
                    </tr>
                    <?php
                    if (!empty($_REQUEST['loginBtn']) && $error == 1) {
                    ?>
                        <tr>
                            <td></td>
                            <td style="color:red;font-weight:bold;">Check Your Login Details</td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
            <div id="footer">
                <table align="center">
                    <tr>
                        <td>Remember me?</td>
                        <td><input type="checkbox" name="rem" value="1"></td>
                        <td></td>
                        <td><a href="forgot_password.php">Forgot Password?</a></td>

                    </tr>
                </table>

            </div>
        </div>
    </form>

</body>

</html>