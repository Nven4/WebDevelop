<?php

class Game
{
    final const STARTPOS_Y = 335;
    final const STARTPOS_Z =  145;
    const STEPLENGHT = 70;

    function __construct(public $boundLRUD{
        set($value){
            if(gettype($value) == "array"){
                if(count($value) != 4)
                    $value = array("0000", "0000", "0000", "0000");
                $this->boundLRUD = $value;
            }
            else
                echo "Введите массив";
        }
    }){
        if(empty($_SESSION["positionY"]) && empty($_SESSION["positionZ"])){
        $_SESSION["positionY"] = self::{"STARTPOS_Y"};
        $_SESSION["positionZ"] = self::{"STARTPOS_Z"};
        }
    }

    function left(string|int $step = 1){
        $nextstep = $_SESSION["positionY"] - self::STEPLENGHT * $step;
        if($nextstep > $this->boundLRUD[0])
            $_SESSION["positionY"] = $nextstep;
    }
    function right(string|int $step = 1){
        $nextstep = $_SESSION["positionY"] + self::STEPLENGHT * $step;
        if($nextstep < $this->boundLRUD[1])
            $_SESSION["positionY"] = $nextstep;
    }
    function up(string|int $step = 1){
        $nextstep = $_SESSION["positionZ"] - self::STEPLENGHT * $step;
        if($nextstep > $this->boundLRUD[2])
            $_SESSION["positionZ"] = $nextstep;
    }
    function down(string|int $step = 1){
        $nextstep = $_SESSION["positionZ"] + self::STEPLENGHT * $step;
        if($nextstep < $this->boundLRUD[3])
            $_SESSION["positionZ"] = $nextstep;
    }
}

?>