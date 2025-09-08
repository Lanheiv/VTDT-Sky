<?php
$weatherData = file_get_contents("https://emo.lv/weather-api/forecast/?city=cesis,latvia");
$data = json_decode($weatherData, true);
$DayPart = DayTime();
$Day = CheckDay($data);

function CheckDay($val) {
    $count = 0;
    foreach($val["list"] as $val) {
         $count++;
         if (date('d/m', $val["dt"]) == date('d/m')) {
            return $count;
            break;
         }
    }
}

function DayTime() {
    if (date('H') >= 6 && date('H') < 12) {
        return "morn";
    } if (date('H') >= 12 && date('H') < 18) {
        return "day";
    } if (date('H') >= 18 && date('H') < 24) {
        return "eve";
    } else {
        return "night";
    }
}
function WindDirection($deg) {
    $direction = ["N", "NE", "E", "SE", "S", "SW", "W", "NW"];
    $value = fmod($deg, 360);
    $result = $value / 45;

    return $direction[floor($result)];
}