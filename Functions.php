<?php

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
function WindDirection() {

}
?>