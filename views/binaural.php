<?php
$css = "binaural";
$title = "binauralfocus";
$description = "binauralfocus";
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
    <div class="content">
        <h2>BINAURAL FOCUS</h2>

        <div class="slidecontainer">
            <table>
                <tr class="spaceUnder">
                    <td><label for="freq1">Freq 1 </label></td>
                    <td><input type="range" min="30" max="1000" value="440" class="slider" id="freq1" oninput="updateFrequency(this.value, 1)"></td>
                    <td><span class="freqContainer"><input id="frequencyText1" type="number" class="frequencytext" value="440" onchange="updateFrequency(this.value, 1)"> Hz</span></td>
                </tr>
                <tr class="spaceUnder">
                    <td><label for="freq2">Freq 2 </label></td>
                    <td><input type="range" min="30" max="1000" value="447" class="slider" id="freq2" oninput="updateFrequency(this.value, 2)"></td>
                    <td><span class="freqContainer"><input id="frequencyText2" type="number" class="frequencytext" value="447" onchange="updateFrequency(this.value, 2)"> Hz</span></td>
                </tr>
                <tr class="spaceUnder">
                    <td><label for="volumeSlider">Volume </label></td>
                    <td><input type="range" min="1" max="100" value="50" class="volumeSlider" id="volumeSlider" oninput="updateVolume(this.value)"></td>
                </tr>
            </table>
        </div>
        <div class="controlbar" id="controlbar">
            <span id="timerWrapper"><label for="timerMins">Minutes </label><input type="number" class="timerMins" id="timerMins" value="30"></span>
            <button onclick="start()" id="startButton">Start</button>
        </div>
        <div class="stopbar" id="stopbar"><button onclick="stop()" id="stopButton">Stop</button></div>
        <div class="timer" id="countdownWrapper" style="visibility: hidden"></div>
        <div>
            <button onclick="toggleAbout()" class="nonButton">About <span id="down">▲</span><span id="up" style="display: none">▼</span></button>
            <div id="aboutDiv" class="aboutDiv" style="display: none;">
                <br>
                Welcome to Binaural Focus, a low distraction site where you can bathe in the focus and relaxation that Binaural Beats bring.<br><br>

                New to binaural beats? Grab some headphones, set your desired time and give them a try: <br>
                <ul>
                    <li>For relaxation - try two frequencies 3-6 Hz apart, for example 250Hz and 256Hz</li>
                    <li>For focus/study - try two frequencies 15-20Hz apart, for example 350Hz and 366Hz</li>
                </ul>

                You can choose whatever frequencies you like, it's the difference between the two that matters.<br><br>

                Finally, I built and maintain this website without monetization - if you feel you can and you want to you can buy me a coffee at <a href="https://web.archive.org/web/20221227112744/https://buymeacoffee.com/lukeryan" target="_blank">https://buymeacoffee.com/lukeryan</a>.
            </div>
        </div>
    </div>
</body>

</html>