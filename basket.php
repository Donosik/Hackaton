<?php
session_start();
require_once("functions/fragments.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
headHTML("Basket");
?>
<link href="styles/basketStyle.css" rel="stylesheet" type="text/css">
<body>
<?php
HeaderDiv();
?>
<div class="wall">
    <div class="inside">
        <h1>Basket</h1>
        <hr style="background-color: #d91e36; height: 2px;"/>
        <h2>Your order:</h2>
        <div style="width: 600px;margin: auto; background-color:white;">
            <?php
            if(isset($_POST['item']))
            {
                $_SESSION['order'.$_POST['item']]=null;
            }
            if (isset($_SESSION['order']))
            {
                for ($i = 0; $i <= $_SESSION['order']; $i++)
                {
                    if (isset($_SESSION['order' . $i]))
                    {
                        ?>
                        <form action="basket.php">
                            <input type="hidden" name="order" value="<?php $i ?>">
                        </form>
                        <?php

                        basket_order($_SESSION['order' . $i][2], $_SESSION['order' . $i][0], $_SESSION['order' .
                        $i][1],$i);

                    }
                }
            }
            else
            {
                echo 'There is nothing in here';
            }
            ?>
        </div>
    </div>
</div>
<?php
hastagsDiv();
?>
</div>
</body>
</html>