<?php
    session_start();

    if(empty($_SESSION["positionY"]) && empty($_SESSION["positionZ"])){
        $_SESSION["positionY"] = 335;
        $_SESSION["positionZ"] = 145;
    }

    $directions = ["left", "up", "right", "down"];

    foreach($directions as $direction){
        if(!empty($_POST[$direction])){
            switch($direction){
                case "left";
                    $_SESSION["positionY"] -= 70;
                    break;
                case "right";
                    $_SESSION["positionY"] += 70;
                    break;
                case "up";
                    $_SESSION["positionZ"] -= 70;
                    break;
                case "down";
                    $_SESSION["positionZ"] += 70;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Game</title>
</head>
<style>
    
    img{
        position: absolute;
        transform: translate(<?php echo $_SESSION["positionY"] ?>px, <?php echo $_SESSION["positionZ"] ?>px);
        height: 80px;
    }

</style>
<body>
    <form method="post">
        <div>
            <input type="text" name="left" placeholder="left">
            <input type="text" name="right", placeholder="right">
        </div>
        <div>
            <input type="text" name="up", placeholder="up">
            <input type="text" name="down", placeholder="down">
        </div>
        <input type="submit" text="ходить!">
    </form>
    <img src="styles/data/941851-200.png" alt="empty">
</body>
</html>