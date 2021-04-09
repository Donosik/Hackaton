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
        <div style="width: 600px;margin: auto; text-align: center;">
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
                echo '</div>';
                ?>
                <div style="width: 600px;margin: auto; clear: both;">
                    <hr style="height: 2px;background-color: black;">
                    <form method="post">
                        <div class="basket_order">
                            <a>First name:</a><br/>
                            <a>Second name:</a><br/>
                            <a>E-mail:</a><br/>
                            <a>City:</a><br/>
                            <a>Your address:</a><br/>
                            <a>Phone:</a><br/>
                            <a>Delivery hour:</a><br/>
                        </div>
                        <div class ="basket_query" style="float: left">
                            <input type="text" name="firstName" placeholder="First name"><br/>

                            <input type="text" name="secondName" placeholder="Second name"><br/>

                            <input type="text" name="e-mail" placeholder="E-mail"><br/>

                            <input type="text" name="city" placeholder="City"><br/>

                            <input type="text" name="address" placeholder="Your address:"><br/>

                            <input type="text" name="phone" placeholder="Phone"><br/>

                            <input type="text" name="time" placeholder="When do you want to get your food?"><br/>
                        </div>
                    </form>
                </div>
                <?php
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