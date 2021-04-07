<?php
if(isset($_GET['restaurant']))
{
    $x=$_GET['restaurant'];
    echo "Actually you are ordering from restaurant $x";
}
?>
<form action="ordered.php" method="post">
    <label for="firstName">First name:</label><br />
    <input type="text" id="firstName" name="firstName"><br />
    <label for="secondName">Second Name:</label><br />
    <input type="text" id="secondName" name="secondName"><br />
    <label for="address">Address:</label><br />
    <input type="text" id="address" name="address"><br />
    <label for="phoneNumber">Phone number:</label><br />
    <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" id="phoneNumber" name="phoneNumber"
           placeholder="123-456-789"><br />
    <label for="paymentMethod">Choose your payment method:</label><br />
    <input type="radio" id="Transfer" name="paymentMethod" value="Transfer">
    <label for="Transfer">Transfer</label><br />
    <input type="radio" id="Cash" name="paymentMethod" value="Cash">
    <label for="Cash">Cash</label><br />
    <input type="submit" value="Submit">
</form>