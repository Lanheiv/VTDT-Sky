<?php
    $weatherData = file_get_contents("https://emo.lv/weather-api/forecast/?city=cesis,latvia");
    $data = json_decode($weatherData, true);
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
            <header>
                <div class="left-hedbox">
                    <button>
                        <svg viewBox=" 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-linecap="round"></path>
                        </svg>
                    </button>

                    <h1>VTDT Sky</h1>
                    <img src="./assets/google-maps.gif" alt="google map gif">
                    <span><?php echo $data['city']['name'].", ".$data['city']['country']; ?></span>
                </div>
                <div class="center-hedbox">
                    <div class="serch-div">
                        <form>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 2a9 9 0 1 0 6.293 15.293l4.707 4.707a1 1 0 0 0 1.414-1.414l-4.707-4.707A9 9 0 0 0 11 2zM11 4a7 7 0 1 1 0 14 7 7 0 0 1 0-14z"></path>
                            </svg>
                            <input type="text" placeholder="Search Location" value="cesis">
                        </form>
                        <img src="./assets/worldwide.gif" alt="worldwide gif">
                    </div>

                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"></path>
                        </svg>
                        <span>Light</span>
                    </button>
                </div>
                <div class="right-hedbox">
                    <button>
                        <img src="./assets/notification.gif" alt="notification gif">
                    </button>

                    <button>
                        <img src="./assets/settings.gif" alt="settings gif" style="margin-left: 1rem;">
                    </button>
                </div>
            </header>
            <main>
                <div class="box box-1">
                    test 1
                </div>
                <div class="box box-2">
                    test 2
                </div>
                <div class="box">
                    test
                </div>
                <div class="box">
                    test
                </div>
                <div class="box">
                    test
                </div>
                <div class="box">
                    test
                </div>
                <div class="box">
                    test
                </div>
                <div class="box">
                    test
                </div>
                <div class="box box-9">
                    test 9
                </div>
            </main>
        </div>
    </div>
</body>
</html>