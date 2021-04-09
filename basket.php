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
            for ($i = 0; $i < $_SESSION['order']; $i++)
            {
                if (isset($_SESSION['order' . $i]))
                {
                    ?>
                    <form action="basket.php">
                        <input type="hidden" name="order" value="<?php $i?>">
                        <input type="submit" value="delete">
                    </form>
                    <?php
                    print_r($_SESSION['order' . $i]);
                    echo '<br/><br/>';

                }
            }
        }
        else
        {
            echo 'Nic tu nie ma';
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