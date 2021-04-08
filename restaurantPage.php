<?php
require_once("functions/fragments.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
$restaurant = 0;
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
<link href="styles/cardreStyle.css" rel="stylesheet" type="text/css">
<link href="styles/modalStyle.css" rel="stylesheet" type="text/css">
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
                            ?>
                            <h1>Przystawki</h1>
                            <hr style="height: 5px; background: #3E3C3D; width: 750px">
                        <?php
                        $allstarters = 2;
                        for ($i = 1; $i <= $allstarters; $i++)
                        {
                            cardre("Przystawka", "Opis", $i);
                        } ?>
                            <div id="myModal" class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <h1>Przystawka</h1>
                                    <h3>Podstawowe składniki</h3>
                                    <p>Opis</p>
                                </div>
                            </div>
                            <script>
                                var modal = document.getElementById("myModal");
                                var btn = document.getElementById("dishName1");
                                var span = document.getElementsByClassName("close")[0];
                                btn.onclick = function () {
                                    modal.style.display = "block";
                                }
                                span.onclick = function () {
                                    modal.style.display = "none";
                                }
                                window.onclick = function (event) {
                                    if (event.target == modal) {
                                        modal.style.display = "none";
                                    }
                                }
                            </script>
                            <?php
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
                    default:
                    {
                        echo "Error! Nie wybrałeś żadnej restauracji!";
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