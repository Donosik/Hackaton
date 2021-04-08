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
<div class="wall">
    <div class="inside">
        <?php
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