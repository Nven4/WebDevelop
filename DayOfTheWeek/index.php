<?php
    $day = "0"; 
    $month = "0";
    $year = "2000";
    $dayweek = "День недели съел Никита";

    if(isset($_POST["day"], $_POST["month"], $_POST["year"])){
        $day = $_POST["day"];
        $month = $_POST["month"];
        $year = $_POST["year"];
    }

    $k = $year % 100;                  
    $j = $year / 100;
    $day_numb = ($day + 13 * ($month + 1) / 5 + $k + $k / 4 + $j / 4 + 5 * $j) % 7;

    $dayweek = match($day_numb){
        1 => "Суббота",
        2 => "Воскресенье",
        3 => "Понедельник",
        4 => "Вторник",
        5 => "Среда",
        6 => "Четверг",
        7 => "Пятница",
        default => "?",
    };
    /*
    $massive =
    [
        "Apple" => ["IPhone", "MacBook"],
        "Sumsung" => ["Galexy S10", "Galexy S30"],
        "Google" => ["Pixel 1", "Pixel 2"],
    ];

    foreach($massive as $company => $phones){
        // echo $company;
        foreach($phones as $phone){
            // echo $phone;
        }
    }

    for($i = 0, $count = count($massive); $i < $count; $i++){
        // echo $i;
    }

    $i = 0;
    do{

    $i++;
    echo $i;

    }while($i < count($massive))
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Position</title>
</head>
<body>
    <div class="container">
        <h1 align="center">Дата счетчик</h1>
        <h2 align="center">Введите дату:</h2>
        <form method="post">
        <div class="datacontainer"> 
            <input name="day" type="text" class="input-field_data">   
            <p>/</p>
            <input name="month" type="text" class="input-field_data">    
            <p>/</p>  
            <input name="year" type="text" class="input-field_data">
        </div>
        <input class="buttonstyle" type="submit">
        </form>
        <p align="center"><?php echo $dayweek;?></p>
    </div>
</body>
</html>