<?php
    include "Functions.php";
    $weatherData = file_get_contents("https://emo.lv/weather-api/forecast/?city=cesis,latvia");
    $data = json_decode($weatherData, true);
    $DayPart = DayTime()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>VTDT SKY</title>
</head>
<body class="light"> <!-- light / dark -->
    <div class="root">
        <div class="data-box">
            <header class="flex c-box c-shadows">
                <div class="left-hedbox flex">
                    <button>
                        <svg viewBox=" 24" xmlns="http://www.w3.org/2000/svg" class="icon">
                            <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-linecap="round"></path>
                        </svg>
                    </button>

                    <h1>VTDT Sky</h1>
                    <img src="./assets/google-maps.gif" alt="google map gif" class="icon">
                    <span><?php echo $data['city']['name'].", ".$data['city']['country']; ?></span>
                </div>
                <div class="center-hedbox flex-rel">
                    <div class="serch-div flex-rel">
                        <form class="flex">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 2a9 9 0 1 0 6.293 15.293l4.707 4.707a1 1 0 0 0 1.414-1.414l-4.707-4.707A9 9 0 0 0 11 2zM11 4a7 7 0 1 1 0 14 7 7 0 0 1 0-14z"></path>
                            </svg>
                            <input type="text" placeholder="Search Location" value="cesis">
                        </form>
                        <img src="./assets/worldwide.gif" alt="worldwide gif" class="icon">
                    </div>

                    <button class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"></path>
                        </svg>
                        <span>Light</span>
                    </button>
                </div>
                <div class="right-hedbox flex">
                    <button class="c-box">
                        <img src="./assets/notification.gif" alt="notification gif">
                    </button>

                    <button class="c-box">
                        <img src="./assets/settings.gif" alt="settings gif" style="margin-left: 1rem;">
                    </button>
                </div>
            </header>
            <main>
                <div class="box c-box c-shadows box-1">
                    <div>
                        <div style="font-size: .75rem; line-height: 1.25rem;">Current Weather</div>
                        <div style="font-weight: 500; font-size: 1.25rem; line-height: 1.75rem;">Local time: <?php echo date("h:i A") ?></div> <!-- vēlāk partaisīt par JS -->
                        <div class="flex">
                            <img src="./assets/wheder/<?php echo $DayPart ?>.png" alt="wheder" style="width: 2.5rem; height: 2.5rem;">
                            <div style="font-weight: 600; font-size: 3rem; line-height: 1; padding-left: .75rem;"><?php echo $data['list']['0']['temp'][$DayPart]; ?></div>
                            <div style="font-weight: 600; font-size: 1.5rem; line-height: 2rem; padding-right: .5rem; margin-bottom: .5rem;">°C</div>
                            <div class="flex" style="font-size: .875rem; line-height: 1.25rem; padding-left: 1.5rem; flex-direction: column; align-items: normal;">
                                <div><?php echo ucfirst($data['list']['0']['weather']['0']['description']); ?></div>
                                <div>Feels Like <?php echo $data['list']['0']['feels_like'][$DayPart]; ?>°C</div>
                            </div>
                        </div>
                    </div>
                    <p style="margin-top: 3rem;">Current wind direction: SE</p>
                </div>
                <div class="box c-box c-shadows box-2">
                    test 2
                </div>
                <div class="box c-box c-shadows">
                    <div class="flex">
                        <img src="./assets/humidity.gif" alt="clouds" class="icon">
                        <span class="s-text">Humidity</span>
                    </div>
                    <span style="margin-left: 2rem; font-weight: 600; font-size: 1.5rem; line-height: 2rem;">
                        <?php echo $data["list"]["0"]["humidity"]."%"; ?>
                    </span>
                </div>
                <div class="box c-box c-shadows">
                    <div class="flex">
                        <img src="./assets/air-pump.gif" alt="air-pump" class="icon">
                    <span class="s-text">Pressure</span>
                    </div>
                    <span style="margin-left: 2rem; font-weight: 600; font-size: 1.5rem; line-height: 2rem;">
                        <?php echo $data["list"]["0"]["pressure"]."°"; ?>
                    </span>
                </div>
                <div class="box c-box c-shadows">
                    <div class="flex">
                        <img src="./assets/clouds.gif" alt="clouds" class="icon">
                    <span class="s-text">Precipitation</span>
                    </div>
                    <span style="margin-left: 2rem; font-weight: 600; font-size: 1.5rem; line-height: 2rem;">
                        <?php echo (float) $data["list"]["0"]["pop"]*100 ."%"; ?>
                    </span>
                </div>
                <div class="box c-box c-shadows">
                    <div class="flex">
                        <img src="./assets/clouds.gif" alt="clouds" class="icon">
                    <span class="s-text">Clouds</span>
                    </div>
                    <span style="margin-left: 2rem; font-weight: 600; font-size: 1.5rem; line-height: 2rem;">
                        <?php echo $data["list"]["0"]["clouds"]."%"; ?>
                    </span>
                </div>
                <div class="box c-box c-shadows">
                    <div class="flex">
                        <img src="./assets/wind.gif" alt="wind" class="icon">
                    <span class="s-text">Max Wind Speed</span>
                    </div>
                    <span style="margin-left: 2rem; font-weight: 600; font-size: 1.5rem; line-height: 2rem;">
                        <?php echo $data["list"]["0"]["gust"]."m/s"; ?>
                    </span>
                </div>
                <div class="box c-box c-shadows">
                    <div class="flex">
                        <img src="./assets/wind.gif" alt="wind" class="icon">
                    <span class="s-text">Average Wind Speed</span>
                    </div>
                    <span style="margin-left: 2rem; font-weight: 600; font-size: 1.5rem; line-height: 2rem;">
                        <?php echo $data["list"]["0"]["speed"]."m/s"; ?>
                    </span>
                </div>
                <div class="box c-box c-shadows box-9">
                    test 9
                </div>
            </main>
        </div>
    </div>
</body>
</html>