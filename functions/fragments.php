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
        <a><form action="restaurants.php" method="get"><input id="inputField" name="searchEngine"></form></a>
        <a><img src="img/loupe.png" onclick="show()"></a>
        <a><img src="img/home.png"></a>
        <a><img src="img/plus.png"></a>
        <a href="basket.php"><img src="img/basket.png"></a>
        <a href="restaurants.php"><img src="img/invite.png"></a>
        <a><img src="img/account.png"></a>
        <a><img src="img/more.png"></a>
    </div>
    <script>
    function show(){
    document.getElementById("inputField").style.visibility="visible";
    }
    </script>
</div>';
}

function card($name, $description, $i)
{
    echo '<div class="card">
    <a href="restaurantPage.php?restaurant=' . $i . '"><img src="img/pizza.png" width="100 px" height="100 px">
    <p id="restaurantName">';
    echo $name;
    echo '</p>
    <p>';
    echo $description;
    echo '</p></a>
</div>';
}

function post($userName, $description)
{
    echo '<div class="post">
                    <img src="img/pizza.png">
                    <div class="icons">
                    <div style="float: left;">
                        <img src="img/pizza.png" onclick="counter()">
                        <span id="counter">0</span>
                        </div>
                        <div style="float: right;">
                        <img src="img/more.png">
                        <img src="img/invite.png">
                        <img src="img/home.png">
                        <img src="img/share.png">
                        </div>
                    </div>
                    <hr style="background: #d91e36; height: 1px;">
                    <p>Name: ' . $userName . '</p>
                    <p>Description: ' . $description . '</p>
                <script>
                //TODO: Giving Like is only working for first post, need to be repaired!
                let like=false;
                function counter()
                {
                    if(like==false)
                    {
                        document.getElementById("counter").innerHTML++;
                        like=!like;
                        console.log("Odejmuje");
                    }
                    else if(like==true)
                    {
                        document.getElementById("counter").innerHTML--;
                        like=!like;
                        console.log("Dodaje");
                    }
                };
</script>
</div>';
}

function cardre($name, $description, $i)
{
    echo '<div class="cardre">
    <a id="dishName1"><img src="img/pizza.png" width="100 px" height="100 px"><img src="img/plus2.png" width="50 px" height="50 px" style="float: right" style="margin-top: 30px">
    <p id="dishName">';
    echo $name;
    echo '</p>
    <p>';
    echo $description;
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