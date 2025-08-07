<?php
$css = "binaural";
$title = "binaural focus";
$description = "binaural focus";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta name="theme-color" content="black">
    <meta property="og:type" content="website">
    <meta property="og:title" content="osullivanjam.es">
    <meta property="og:image" content="<?= "https://osullivanjam.es" . IMAGE_PATH_GLOBAL . "scaryface.jpg" ?>">
    <meta property="og:description" content="<?= $description ?>">
    <meta name='description' content='<?= $description ?>'>
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH_GLOBAL . 'icon.png' ?>">
    <link rel="stylesheet" href="<?= CSS_PATH . $css . '.css?v=' . VERSION ?>">
    <script src="<?= JS_PATH . 'binaural.js' ?>"></script>
    <title><?= $title ?></title>
</head>

<body>
    <div class="wrapper">
        <h2>BINAURAL FOCUS</h2>
        <div id="content">

            <div class="player-grid">
                <div class="countdown-box">
                    <div class="countdown-text" id="countdown-text">00:00</div>
                </div>

                <label id="volume-slider-label" for="volumeSlider">Volume</label>
                <input type="range" min="1" max="100" value="50" class="volumeSlider" id="volumeSlider" oninput="updateVolume(this.value)">

                <label for="timerMins">Minutes</label>
                <input type="number" class="timerMins" id="timerMins" size="10" value="30">
            </div>

            <div class="slide-grid">
                <label for="freq1">Freq 1 </label>
                <input type="range" min="30" max="1000" value="440" class="slider" id="freq1" oninput="updateFrequency(this.value, 1)">
                <span class="freqContainer"><input id="frequencyText1" type="number" class="frequencytext" value="440" size="4" onchange="updateFrequency(this.value, 1)"> Hz</span>

                <label for="freq2">Freq 2 </label>
                <input type="range" min="30" max="1000" value="447" class="slider" id="freq2" oninput="updateFrequency(this.value, 2)">
                <span class="freqContainer"><input id="frequencyText2" type="number" class="frequencytext" value="447" size="4" onchange="updateFrequency(this.value, 2)"> Hz</span>

                <div class="start-bar" id="controlbar">
                    <button onclick="togglePlay()" id="startButton">Start</button>
                </div>
            </div>

            <details class="about-container">
                <summary>About</summary>
                <div id="about-text">
                    <br>
                    Welcome to Binaural Focus, a low distraction site where you can bathe in the focus and relaxation that Binaural Beats bring.<br><br>

                    New to binaural beats? Grab some headphones, set your desired time and give them a try: <br>
                    <ul>
                        <li>For relaxation - try two frequencies 3-6 Hz apart, for example 250Hz and 256Hz</li>
                        <li>For focus/study - try two frequencies 15-20Hz apart, for example 350Hz and 366Hz</li>
                    </ul>

                    You can choose whatever frequencies you like, it's the difference between the two that matters.<br><br>

                    Disclaimer: I did not build this website from scratch. This webpage is a modified version of a site that
                    used to be hosted at binauralfocus.com but is currently only accessible via
                    <a href="https://web.archive.org/web/20221227112744/https://binauralfocus.com/" target="_blank">internet archive</a>.
                    As a result of this downtime, I have decided to tweak the archived site and repost it here.
                    <br><br>
                    Hopefully the original creator is doing well, if you want you can try to buy them a coffee
                    <a href="https://buymeacoffee.com/lukeryan" target="_blank">here</a>.
                </div>
            </details>

        </div>
        <div class="binaural-footer">
            Hosted on <a href="/">osullivanjam.es</a>
        </div>
    </div>
</body>

</html>