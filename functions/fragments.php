<?php
/**
 * @param string $name Argument to show how HTML <title> should look like
 */
function headHTML($name = "")
{
    echo '
<head>
    <meta charset="UTF - 8">
    <title> Hackaton';
    if ($name != "")
    {
        echo ' - ' . $name;
    }
    echo '</title>

    <link href="styles/mainStyle.css" rel="stylesheet" type="text/css">
</head>';
}

function HeaderDiv()
{
    echo '<div class="header">
    <div class="headerLeft">
        <a href="index.php"><img src="img/pizza.png" height="50" width="50"></a>
    </div>
    <div class="headerRight">
        <a>Notifications</a>
        <a style="text-decoration: none;" href="restaurants.php">Order Food</a>
        <a>Account</a>
    </div>
</div>';
}

function card($name, $description, $i)
{
    echo '<div class="card">
    <a href="restaurantPage.php?restaurant=' . $i . '"><img src="img/pizza.png" width="100 px" height="100 px"></a>
    <p id="restaurantName">';
    echo $name;
    echo '</p>
    <p>';
    echo $description;
    echo '</p>
</div>';
}

function post($userName,$rating,$description)
{
    echo '<div class="post">
                    <img src="img/pizza.png">
                    <div class="icons">
                        <img src="img/pizza.png">
                        <img src="img/more.png">
                        <img src="img/invite.png">
                        <img src="img/home.png">
                        <img src="img/share.png">
                    </div>
                    <span>'.$userName.'</span>
                    <span>'.$rating.'</span>
                    <p>'.$description.'
                    </p>
                </div>';
}