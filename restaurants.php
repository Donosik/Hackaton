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
                        <input type="text" name="searchEngine" style="width: 200px;"
                               placeholder="what do u want to eat?">
                        <input type="submit" value="Search">
                    </form>
                </div>
                <?php

                $restaurants = array(
                    array("Łosoś", "DASD", 1,
                        array("#Sushi")),
                    array("Ryba", "Opis", 2,
                        array("#Sushi")),
                    array("Damian", "Opis", 3,
                        array("#Sushi", "#Ryba")),
                    array("Restauracja", "Opis", 4,
                        array("#Mięso")),
                    array("Dąb", "Opis", 5,
                        array("#Hajs")),
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
                            for ($j = 0;$j<sizeof($restaurants[$i][3]);$j++)
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
    <div class="hashTags">
        <div class="inside">

        </div>
    </div>
</div>
</body>
</html>

