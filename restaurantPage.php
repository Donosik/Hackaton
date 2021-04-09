<?php
session_start();
if (isset($_POST['Restaurant']))
{
    $order = array($_POST['Restaurant'],
        $_POST['name'], $_POST['price']);
    if (isset($_SESSION['order']))
    {
        $_SESSION['order']++;
        $_SESSION['order' . $_SESSION['order']] = $order;
    }
    else
    {
        $_SESSION['order']=0;
        $_SESSION['order' . $_SESSION['order']] = $order;
    }
}
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
                <h1><?php echo $_GET['name'];?></h1>
                <hr style="height: 5px; background: #3E3C3D; width: 750px">
                <h2>Starters:</h2>
                <?php
                $myFile = "menu/menu" . $restaurant . ".txt";
                $lines = file($myFile);
                $i = 0;
                $j = 0;
                foreach ($lines as $line)
                {
                    $var = explode(':', $line, 2);
                    $arr[$i] = $var[1];
                    $i++;
                    if ($i == 6)
                    {
                        $i = 0;
                        $menus[$j] = $arr;
                        $j++;
                    }
                }
                foreach ($menus as $menu)
                {
                    cardre($menu[0], $menu[1], $menu[3], $menu[4]);
                    echo '
                            <div class="modal">
                                <div class="modal-content">
                                    <span class="close">&times;</span>

                                    <h1>' . $menu[1] . '</h1>
                                    <h3>' . $menu[2] . '</h3>
                                    <p>' . $menu[5] . '</p>
                                    <form action="restaurantPage.php?restaurant=' . $restaurant . '" method="post">
                                    <input type="hidden" 
                                     name="Restaurant" value="' . $restaurant . '">
                                    <input type="hidden" 
                                     name="name" value="' . $menu[1] . '">
                                                                         <input type="hidden" 
                                     name="price" value="' . $menu[4] . '">
                                    <input type="image" src="img/plus.png" width="40px" height="40px" style="float: right" value="Submit">
                                    </form>
                                </div>
                            </div>        
                            ';
                    if ($menu[0]==2){
                     echo'<h2>Main Course</h2>';
                    }
                    if ($menu[0]==4){
                        echo'<h2>Drinks</h2>';
                    }
                } ?>
                <script>
                    var modal = document.getElementsByClassName("modal");
                    var btn = document.getElementsByClassName("cardre");
                    var span = document.getElementsByClassName("close");

                    for (let i = 0; i < btn.length; i++) {
                        btn[i].onclick = function () {
                            modal[i].style.display = "block";
                        }
                        span[i].onclick = function () {
                            modal[i].style.display = "none";
                        }
                        // Works only for last modal
                        window.onclick = function (event) {
                            if (event.target == modal[i]) {
                                modal[i].style.display = "none";
                            }
                        }
                    }
                </script>
            </div>
        </div>
    </div>
    <?php
    hastagsDiv();
    ?>
</div>
</body>
</html>