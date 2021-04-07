<?php
if(isset($_POST['paymentMethod']))
{
    $paymentMethod=$_POST['paymentMethod'];
    if($paymentMethod=="Cash")
    {
        echo "wybrano płatność gotówka";
    }
    else if($paymentMethod=="Transfer")
    {
        echo "wybrano płatność kartą";
    }
}
