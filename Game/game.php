<?php
    $positionY = 335;
    $positionZ = 145;

    
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
        transform: translate(<?php echo "$positionY" ?>px, <?php echo "$positionZ" ?>px);
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