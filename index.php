<?php
session_start();
require_once("functions/fragments.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
headHTML("Main Page");
?>
<link href="styles/postStyle.css" rel="stylesheet" type="text/css">
<body>
<?php
HeaderDiv();
?>
<div class="wall">
    <div class="inside">
        <?php
        $myFile="posts.txt";
        $lines=file($myFile);
        $i=0;
        $j=0;
        foreach ($lines as $line)
        {
            $var = explode(':', $line, 2);
            $arr[$var[0]] = $var[1];
            $i++;
            if($i==6)
            {
                $i=0;
                $posts[$j]=$arr;
                $j++;
            }
        }

        print_r($posts[1]);


        post("Damian", "Ale smaczne! Polecam gorąco!");
        post("Damian", "Ale smaczne! Polecam gorąco!");
        post("Damian", "Ale smaczne! Polecam gorąco!");
        ?>
    </div>
</div>
<?php
hastagsDiv();
?>
</div>
</body>
</html>

