<?php
require_once("functions/fragments.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
headHTML("Restaurants");
?>
<link href="styles/cardStyle.css" rel="stylesheet" type="text/css">
<body>
<?php
HeaderDiv();
?>
<div class="main">
    <div class="wallOutside">
        <div class="wallInside">
            <div class="inside">
                <?php
                // Number of all Restaurants
                $allRestaurants = 10;
                // Restaurant choosen by user
                $choosenRestaurant = 0;
                for ($i = 1; $i <= $allRestaurants; $i++)
                {
                    card("Restauracja","Opis",$i);
                }
                ?>
            </div>
        </div>
    </div>
    <div class="hashTags">
        <div class="inside">

        </div>
    </div>
</div>
</body>
</html>

