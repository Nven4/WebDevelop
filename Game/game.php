<?php
    spl_autoload_register(function($classname){
        require "php/$classname.php";
    });

    session_start();

    $game = new Game(["265", "1140", "75", "500"]);
    
    if(!empty($_POST["left"])){
        $game->left((int)$_POST["left"]);
    }
    if(!empty($_POST["right"])){
        $game->right((int)$_POST["right"]);
    }
    if(!empty($_POST["up"])){
        $game->up((int)$_POST["up"]);
    }
    if(!empty($_POST["down"])){
        $game->down((int)$_POST["down"]);
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
        <div class="status">Step Status: </div>
    </form>
    <img src="styles/data/941851-200.png" alt="!empty">
</body>
</html>