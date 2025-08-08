let playing = false;
let context;
let gain;
let osc1, osc2;
let panLeft, panRight;
let timerId;
let volume = 0.5;

function togglePlay() {
    if (playing) {
        stop();
        return;
    }

    if (!context) {
        const AudioContext = window.AudioContext || window.webkitAudioContext;
        if (!AudioContext) {
            alert("Web Audio API is not supported in this browser :(");
            return;
        }
        context = new AudioContext();
    }

    const isSafari = !!window.webkitAudioContext;

    panLeft = isSafari ? context.createPanner() : context.createStereoPanner();
    panRight = isSafari ? context.createPanner() : context.createStereoPanner();

    if (isSafari) {
        panLeft.panningModel = "equalpower";
        panRight.panningModel = "equalpower";
        panLeft.setPosition(1, 0, 0);
        panRight.setPosition(-1, 0, 0);
    } else {
        panLeft.pan.value = -1;
        panRight.pan.value = 1;
    }

    osc1 = context.createOscillator();
    osc1.frequency.value = parseInt(document.getElementById("freq1").value, 10);
    osc2 = context.createOscillator();
    osc2.frequency.value = parseInt(document.getElementById("freq2").value, 10);

    gain = context.createGain();
    gain.gain.setValueAtTime(0.001, context.currentTime);

    osc1.connect(panLeft).connect(gain);
    osc2.connect(panRight).connect(gain);
    gain.connect(context.destination);
    osc1.start();
    osc2.start();

    gain.gain.exponentialRampToValueAtTime(volume, context.currentTime + 2);
    const minsToPlay = parseInt(document.getElementById("timerMins").value, 10);
    timer(minsToPlay);

    playing = true;
    document.getElementById("startButton").innerHTML = "Stop";
    document.getElementById("timerMins").disabled = true;
}

async function stop() {
    document.getElementById("startButton").disabled = true;
    setCountdownText("--", "--");
    clearInterval(timerId);

    const fadeDuration = 3;
    gain.gain.setValueAtTime(volume, context.currentTime);
    gain.gain.exponentialRampToValueAtTime(
        0.001,
        context.currentTime + fadeDuration
    );
    const delay = (ms) => new Promise((res) => setTimeout(res, ms));
    await delay(fadeDuration * 1000);
    osc1.stop();
    osc2.stop();
    playing = false;

    document.getElementById("startButton").innerHTML = "Start";
    document.getElementById("startButton").disabled = false;
    document.getElementById("timerMins").disabled = false;
    setCountdownTextFromSeconds(0);
}

function updateFrequency(newFreq, oscillatorId) {
    const correctedFreq = Math.min(Math.max(parseInt(newFreq), 1), 1000);
    if (oscillatorId === 1) {
        if (playing === true) osc1.frequency.value = correctedFreq;
        document.getElementById("frequencyText1").value = correctedFreq;
        document.getElementById("freq1").value = correctedFreq;
    } else if (oscillatorId === 2) {
        if (playing === true) osc2.frequency.value = correctedFreq;
        document.getElementById("frequencyText2").value = correctedFreq;
        document.getElementById("freq2").value = correctedFreq;
    }
}

function updateVolume(newVolume) {
    volume = newVolume / 100;
    if (!!gain) {
        gain.gain.linearRampToValueAtTime(volume, context.currentTime + 0.1);
    }
}

function timer(mins) {
    let countdownSeconds = mins * 60;
    setCountdownTextFromSeconds(countdownSeconds);
    timerId = setInterval(function () {
        countdownSeconds -= 1;
        if (countdownSeconds <= 0) {
            stop();
        } else {
            setCountdownTextFromSeconds(countdownSeconds);
        }
    }, 1000);
}

function setCountdownTextFromSeconds(countdownSeconds) {
    const min = padNumberWithZero(countdownSeconds / 60);
    const sec = padNumberWithZero(countdownSeconds - min * 60);
    setCountdownText(min, sec);
}

function padNumberWithZero(num) {
    return Math.floor(num).toString().padStart(2, "0");
}

function setCountdownText(min, sec) {
    document.querySelector("div.countdown-text").innerHTML = min + ":" + sec;
}
