<?php
session_start();
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
                        <input type="text" name="searchEngine" style="width: 300px;font-size: 20px; font-family: 'Comfortaa', cursive; border-radius: 20px; padding-left: 10px;"
                               placeholder="what do you want to eat?">
                    </form>
                </div>
                <?php

                $myFile="restaurants.txt";
                $lines=file($myFile);
                $a=0;
                $b=0;
                foreach ($lines as $line)
                {
                    $var=explode(':',$line,2);
                    $arr[$a]=$var[1];
                    if($a==4)
                    {
                        $x=explode(';',$var[1]);

                        for($k=0;$k<sizeof($x);$k++)
                        {
                            $c[$k]=$x[$k];
                        }
                        $arr[$a]=$c;
                        $c=null;

                    }
                    $a++;
                    if($a==5)
                    {
                        $a=0;
                        $restaurants[$b]=$arr;
                        $b++;
                    }
                }
                if (!(isset($_GET['searchEngine'])) || ($_GET['searchEngine'] == ""))
                {
                    for ($i = 0; $i < sizeof($restaurants); $i++)
                    {
                        card($restaurants[$i][0], $restaurants[$i][1], $restaurants[$i][2], $restaurants[$i][3],
                            $restaurants[$i][4]);
                    }
                }
                else
                {
                    for ($i = 0; $i < sizeof($restaurants); $i++)
                    {
                        if (strpos($restaurants[$i][1], $_GET['searchEngine']) !== false)
                        {
                            card($restaurants[$i][0], $restaurants[$i][1], $restaurants[$i][2], $restaurants[$i][3],
                                $restaurants[$i][4]);
                        }
                        else if (strpos($restaurants[$i][2], $_GET['searchEngine']) !== false)
                        {
                            card($restaurants[$i][0], $restaurants[$i][1], $restaurants[$i][2], $restaurants[$i][3],
                                $restaurants[$i][4]);
                        }
                        else
                        {
                            for ($j = 0; $j < sizeof($restaurants[$i][4]); $j++)
                            {
                                if (strpos($restaurants[$i][4][$j], $_GET['searchEngine']) !== false)
                                {
                                    card($restaurants[$i][0], $restaurants[$i][1], $restaurants[$i][2], $restaurants[$i][3],
                                        $restaurants[$i][4]);
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

