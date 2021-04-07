<?php
require_once("functions/fragments.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
$restaurant=0;
if (isset($_GET['restaurant']))
{
// ID number of restaurant
    $restaurant = $_GET['restaurant'];
    headHTML($restaurant);
}
else
{
    headHTML();
}
?>
<body>
<?php
HeaderDiv();
?>
<div class="main">
    <div class="wallOutside">
        <div class="wall">
            <div class="inside">
                <?php
                switch ($restaurant)
                {
                    case 1:
                        {
                            echo "1 Strona restauracji $restaurant";
                        }
                        break;
                    case 2:
                        {
                            echo "2 Strona restauracji $restaurant";
                        }
                        break;
                    case 3:
                        {
                            echo "3 Strona restauracji $restaurant";
                        }
                        break;
                    case 4:
                        {
                            echo "4 Strona restauracji $restaurant";
                        }
                        break;
                    case 5:
                        {
                            echo "5 Strona restauracji $restaurant";
                        }
                        break;
                    case 6:
                        {
                            echo "6 Strona restauracji $restaurant";
                        }
                        break;
                    case 7:
                        {
                            echo "7 Strona restauracji $restaurant";
                        }
                        break;
                    case 8:
                        {
                            echo "S8 trona restauracji $restaurant";
                        }
                        break;
                    case 9:
                        {
                            echo "9 Strona restauracji $restaurant";
                        }
                        break;
                    case 10:
                        {
                            echo "10 Strona restauracji $restaurant";
                        }
                        break;
                    default:
                    {
                        echo "Error! Nie wybrałeś żadnej restauracji!";
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