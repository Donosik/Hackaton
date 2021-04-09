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
        $myFile = "posts.txt";
        $lines = file($myFile);
        $i = 0;
        $j = 0;
        foreach ($lines as $line)
        {
            $var = explode(':', $line, 2);
            $arr[$i] = $var[1];
            $i++;
            if ($i == 7)
            {
                $i = 0;
                $posts[$j] = $arr;
                $j++;
            }
        }
        foreach ($posts as $post)
        {
            post($post[0], $post[1], $post[2], $post[3], $post[4], $post[5], $post[6]);
        }

        ?>
    </div>
</div>
<?php
hastagsDiv();
?>
</div>
<script>
    var counter = document.getElementsByClassName("counter");
    var like = document.getElementsByClassName("like");

    for (let i = 0; i < like.length; i++) {
        like[i].onclick = function () {
            counter[i].innerHTML++;
        }
    }
</script>
</body>
</html>

