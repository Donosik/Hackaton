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
            $arr[$i] = $var[1];
            $i++;
            if($i==6)
            {
                $i=0;
                $posts[$j]=$arr;
                $j++;
            }
        }
        foreach($posts as $post)
        {
            post($post[0],$post[1],$post[2],$post[3],$post[4],$post[5]);
        }

        ?>
    </div>
</div>
<?php
hastagsDiv();
?>
</div>
<script>
    function counter(n)
    {
        console.log("funkcja");
        console.log(n);
        let string="bool "+n;
        console.log(string);
        if(document.getElementById(string).value=="0"){
            console.log("dupa");
        }
        console.log(bool);
        if(bool==0)
        {
            //document.getElementById("counter"+n).innerHTML++;
            //document.getElementById("bool"+n).innerHTML=1;
            console.log("Odejmuje");
        }
        else if(bool==1)
        {
            //document.getElementById("counter"+n).innerHTML--;
            //document.getElementById("bool"+n).innerHTML=0;
            console.log("Dodaje");
        }
    };
</script>
</body>
</html>

