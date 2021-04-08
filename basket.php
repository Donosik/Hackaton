<?php
session_start();
require_once("functions/fragments.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
headHTML("Basket");
?>
<link href="styles/postStyle.css" rel="stylesheet" type="text/css">
<body>
<?php
HeaderDiv();
?>
<div class="wall">
    <div class="inside">
        <h1>Basket</h1>
        <hr style="background-color: #d91e36; height: 2px;"/>
        <h2>Your order:</h2>
        <?php
        if (isset($_SESSION['order']))
        {
            print_r($_SESSION['order']);
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