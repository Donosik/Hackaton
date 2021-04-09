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

        }
        else
        {
            ?>
            <form action="account.php" method="get">
                <input type="submit" value="login" name="login" id="1">
                <input type="submit" value="register" name="login" id="0">
            </form>
            <?php
            if (isset($_SESSION['login']))
            { ?>
                <form action="account.php" method="post">
                    <label>Login</label>
                    <label>Username</label>
                    <input type="text" name="username">
                    <label>Password</label>
                    <input type="password" name="username">
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
                    <input type="password" name="username">
                    <input type="hidden" name="status" value="register">
                    <input type="submit" value="Submit">
                </form>
                <?php
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

