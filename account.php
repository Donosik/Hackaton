<?php
session_start();
require_once("functions/fragments.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
headHTML("Account");
?>
<body>
<?php
HeaderDiv();
?>
<div class="wall">
    <div class="inside">
        <?php
        if (isset($_SESSION['account']))
        {
            echo 'Jesteś zalogowany!';
        }
        else if (isset($_POST['status']))
        {
            if ($_POST['status'] == "register")
            {
                $_SESSION['account'] = "login";
                $myfile = fopen("accounts/" . $_POST['username'] . ".txt", "w");
                fwrite($myfile, "username:" . $_POST['username'] . "\n");
                fwrite($myfile, "password:" . $_POST['password']);
                fclose($myfile);
            }
            else
            {
                $myfile = file("accounts/" . $_POST['username'] . ".txt") or die("There is no user!");
                $username = explode(':', $myfile[0], 2);
                $password = explode(':', $myfile[1], 2);
                $username[1]=substr($username[1],0,-1);
                if (($username[1] == $_POST['username']) && ($password[1] == $_POST['password']))
                {
                    $_SESSION['account'] = $_POST['status'];
                    $_SESSION['username'] = $_POST['username'];
                }
            }
        }
        else
        {
            ?>
            <form action="account.php" method="get">
                <input type="submit" value="login" name="login" id="1">
                <input type="submit" value="register" name="login" id="0">
            </form>
            <?php
            if (isset($_GET['login']))
            {
                if ($_GET['login'] == "login")
                { ?>
                    <form action="account.php" method="post">
                        <label>Login</label><br/><br/>
                        <label>Username</label>
                        <input type="text" name="username"><br/><br/>
                        <label>Password</label>
                        <input type="password" name="password">
                        <input type="hidden" name="status" value="login">
                        <input type="submit" value="Submit">
                    </form>
                    <?php
                }
                else
                {
                    ?>
                    <form action="account.php" method="post">
                        <label>Register</label><br/><br/>
                        <label>Username</label>
                        <input type="text" name="username"><br/><br/>
                        <label>Password</label>
                        <input type="password" name="password">
                        <input type="hidden" name="status" value="register">
                        <input type="submit" value="Submit">
                    </form>
                    <?php
                }
            }
        }
        ?>
    </div>
</div>
<?php
hastagsDiv();
?>
</div>
</body>
</html>

