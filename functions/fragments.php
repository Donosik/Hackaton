<?php
/**
 * @param string $name Argument to show how HTML <title> should look like
 */
function headHTML($name = "")
{
    echo '
<head>
    <meta charset="UTF - 8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
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
        <a href="index.php"><img src="img/pizza.png">
        <p>Foodbook</p></a>
    </div>
    <div class="headerRight">
        <a><form action="restaurants.php" method="get"><input id="inputField" name="searchEngine"  placeholder="what do you want to eat?" style="width: 250px;"></form></a>
        <a><img src="img/loupe.png" onclick="show()"></a>
        <a href="restaurants.php"><img src="img/home.png"></a>
        <a><img src="img/plus.png"></a>
        <a href="basket.php"><img src="img/basket.png"></a>
        <a><img src="img/invite.png"></a>
        <a href="account.php"><img src="img/account.png"></a>
        <a><img src="img/more.png"></a>
    </div>
    <script>
    function show(){
    var obj = document.getElementById("inputField");
    if (obj.style.visibility=="visible")
    {
        obj.style.visibility="hidden";
    }
    else
    {
        obj.style.visibility="visible";
    }
    
    }
    </script>
</div>';
}

function card($id, $name, $description, $img, $hashtags)
{
    echo '<div class="card">
    <a href="restaurantPage.php?restaurant=' . $id . '"><img src="img/' . $img . '" width="100 px" height="100 px">
    <p id="restaurantName">';
    echo $name;
    echo '</p>
    <p>';
    echo $description;
    echo '</p></a>
</div>';
}

function post($id, $likes, $imgname, $username, $description, $restaurantid)
{
    echo '<div class="post">
                    <img src="pic/' . $imgname . '">
                    <div class="icons">
                    <div style="float: left;">
                        <img class="like" src="img/pizza.png">
                        <span class="counter">' . $likes . '</span>
                        </div>
                        <div style="float: right;">
                        <img src="img/comment.png">
                        <a href="restaurantPage.php?restaurant=' . $restaurantid .'" style = "margin:0px; padding:0px"><img src="img/home.png"></a>
                        <img src="img/share.png">
                        </div>
                    </div>
                    <hr style="background: #d91e36; height: 1px;">
                    <p style="color: #686466; font-size: 14px">Posted by: ' . $username . '</p>
                    <p>' . $description . '</p>
</div>';
}

function basket_order($price, $restaurantid, $name)
{
    echo '<div class="cardre"">
    
    <a class="dishName"><img src="img/' . $img . '" width="100 px" height="100 px">
    <p>
    <img src="img/plus2.png" width="40 px" height="40 px" style="float: right">';
    echo $name;
    echo '</p>
    <p>';
    echo '<p style="color: #686466; font-size: 16px">'. $price .'$</p>'; 
    echo '</p></a>
</div>';
}

function cardre($i, $name, $img, $price)
{
    echo '<div class="cardre"">
    
    <a class="dishName"><img src="img/' . $img . '" width="100 px" height="100 px">
    <p>
    <img src="img/plus2.png" width="40 px" height="40 px" style="float: right">';
    echo $name;
    echo '</p>
    <p>';
    echo '<p style="color: #686466; font-size: 16px">'. $price .'$</p>'; 
    echo '</p></a>
</div>';
}

function hastagsDiv()
{
    echo '<div class="hashTags">
    <div class="Tag">
        <a href="restaurants.php?searchEngine=%23fish">#fish</a>
        <a href="restaurants.php?searchEngine=%23sushi">#sushi</a>
        <a href="restaurants.php?searchEngine=%23meat">#meat</a>
        <a href="restaurants.php?searchEngine=%23cash">#cash</a>
        <a href="restaurants.php?searchEngine=%23vegetarian">#vegetarian</a>
        <a href="restaurants.php?searchEngine=%23chinese">#chinese</a>
        <a href="restaurants.php?searchEngine=%23italian">#italian</a>
        <a href="restaurants.php?searchEngine=%23pizza">#pizza</a>
        <a href="restaurants.php?searchEngine=%23top10">#top10</a>
        <a href="restaurants.php?searchEngine=%23soup">#soup</a>
        <a href="restaurants.php?searchEngine=%23pancakes">#pancakes</a>
        <a href="restaurants.php?searchEngine=%23discount">#discount</a>
        <a href="restaurants.php?searchEngine=%23coffe">#coffe</a>
        <a href="restaurants.php?searchEngine=%23wine&beer">#wine&beer</a>
        <a href="restaurants.php?searchEngine=%23casual">#casual</a>
        <a href="restaurants.php?searchEngine=%23fancy">#fancy</a>
        <a href="restaurants.php?searchEngine=%23mexican">#mexican</a>
        <a href="restaurants.php?searchEngine=%23cosy">#cosy</a>
        <a href="restaurants.php?searchEngine=%23hamburgers">#hamburgers</a>
        <a href="restaurants.php?searchEngine=%23polish">#polish</a>
    </div>
</div>';
}