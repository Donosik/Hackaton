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
        <a href="index.php"><img src="img/pizza.png">
        <p>Foodbook</p></a>
    </div>
    <div class="headerRight">
        <a><input id="inputField" style="visibility: hidden;"></a>
        <a><img src="img/loupe.png" onclick="show()"></a>
        <a><img src="img/invite.png"></a>
        <a href="restaurants.php"><img src="img/account.png"></a>
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
    <a id="dishName1"><img src="img/pizza.png" width="100 px" height="100 px">
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
    <div class="inside">
        <a href="http://localhost/Hackaton/restaurants.php?searchEngine=%23Ryba">#Ryba</a>
        <a href="http://localhost/Hackaton/restaurants.php?searchEngine=%23Sushi">#Sushi</a>
        <a href="http://localhost/Hackaton/restaurants.php?searchEngine=%23Mięso">#Mięso</a>
        <a href="http://localhost/Hackaton/restaurants.php?searchEngine=%23Hajs">#Hajs</a>
    </div>
</div>';
}