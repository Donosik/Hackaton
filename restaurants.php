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
        <div class="wall">
            <div class="inside">
                <div class="search">
                    <form action="restaurants.php" method="get">
                        <input type="text" name="searchEngine" style="width: 400px;font-size: 26px; font-family: 'Comfortaa', cursive; border-radius: 20px;"
                               placeholder="what do you want to eat?">
                    </form>
                </div>
                <?php

                $restaurants = array(
                    array("Łosoś", "DASD", 1,
                        array("#sushi", "#fish", "#chinese")),
                    array("Ryba", "Opis", 2,
                        array("#sushi")),
                    array("Damian", "Opis", 3,
                        array("#sushi", "#fish")),
                    array("Restauracja", "Opis", 4,
                        array("#meat", "#discount", "#italian", "#chinese")),
                    array("Dąb", "Opis", 5,
                        array("#cash", "#top10", "#wine&bear")),
                );
                // Number of all Restaurants
                $allRestaurants = 5;
                if (!(isset($_GET['searchEngine'])) || ($_GET['searchEngine'] == ""))
                {
                    for ($i = 1; $i <= $allRestaurants; $i++)
                    {
                        card($restaurants[$i - 1][0], $restaurants[$i - 1][1], $restaurants[$i - 1][2]);
                    }
                }
                else
                {
                    for ($i = 0; $i < $allRestaurants; $i++)
                    {
                        if (strpos($restaurants[$i][0], $_GET['searchEngine']) !== false)
                        {
                            card($restaurants[$i][0], $restaurants[$i][1], $restaurants[$i][2]);
                        }
                        else if (strpos($restaurants[$i][1], $_GET['searchEngine']) !== false)
                        {
                            card($restaurants[$i][0], $restaurants[$i][1], $restaurants[$i][2]);
                        }
                        else
                        {
                            for ($j = 0; $j < sizeof($restaurants[$i][3]); $j++)
                            {
                                if (strpos($restaurants[$i][3][$j], $_GET['searchEngine']) !== false)
                                {
                                    card($restaurants[$i][0], $restaurants[$i][1], $restaurants[$i][2]);
                                }
                            }
                        }
                    }
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

