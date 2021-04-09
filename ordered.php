<?php
session_start();
require_once("functions/fragments.php");
if ((isset($_POST['firstName'])) && (isset($_POST['secondName'])) && (isset($_POST['e-mail'])) && (isset($_POST['city'])) &&
    (isset($_POST['address'])) && (isset($_POST['phone'])) && (isset($_POST['time'])))
{
    $myfile = fopen("orders.txt", "a+");
    fwrite($myfile, $_POST['time'] . "\n");
    fclose($myfile);
    $file = fopen("orders.txt", "r");
    $linecount = 0;
    while (!feof($file))
    {
        $line = fgets($file);
        $linecount++;
    }
    fclose($file);
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
headHTML("Ordered");
?>
<body>
<?php
HeaderDiv();
?>
<div class="wall">
    <div class="inside">
        <p>You ordered your food,<br/> to complete the ordering you need to choose the payment method</p>
        <p>You are today's <?php echo $linecount-1; ?> quest
    </div>
    <?php
    hastagsDiv();
    ?>
</div>
</body>
</html>