<?php 
    //STATIC PROPERTIES CHAPTER
   class Weather{
    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celsiusToFarenheit($c){
        return $c * 9/5 +32;
    }

    public static function determineTempConditions($f){
        if ($f < 40) {
            return self::$tempConditions[0];
        }elseif ($f < 70) {
            return self::$tempConditions[1];
        }else {
            return self::$tempConditions[2];
        }
    }
   }


   //print_r(Weather::$tempConditions);
   //echo Weather::celsiusToFarenheit(20);
   echo Weather::determineTempConditions(20)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP OOP TUTORIAL</title>
    </head>
    <body>
        <div></div>
    </body>
</html>