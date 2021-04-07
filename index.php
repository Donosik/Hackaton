<?php
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
<div class="main">
    <div class="wallOutside">
        <div class="wallInside">
            <div class="inside">
                <?php
                post("Damian", "5/5", "Ale smaczne! Polecam gorąco!");
                ?>
            </div>
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