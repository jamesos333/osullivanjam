var playing = false;

var context;
var panLeftNode;
var panRightNode;
var gain;

var osc1Frequency = 440;
var osc1;

var osc2Frequency = 447;
var osc2;

var timerId;

var volume = 0.5;

var isSafari = false;

function togglePlay() {
    if (this.playing === false) {
        var AudioContext =
            window.AudioContext || // Default
            window.webkitAudioContext || // Safari and old versions of Chrome
            false;

        if (window.webkitAudioContext) {
            this.isSafari = true;
        }

        if (AudioContext) {
            // Do whatever you want using the Web Audio API
            var ctx = new AudioContext();
        } else {
            // Web Audio API is not supported
            // Alert the user
            alert(
                "Sorry, but the Web Audio API is not supported by your browser. Please, consider upgrading to the latest version or downloading Google Chrome or Mozilla Firefox"
            );
        }

        var context = this.context || ctx;
        this.context = context;

        this.panLeftNode = this.isSafari
            ? context.createPanner()
            : context.createStereoPanner();
        this.panRightNode = this.isSafari
            ? context.createPanner()
            : context.createStereoPanner();

        if (isSafari) {
            panLeftNode.panningModel = "equalpower";
            panRightNode.panningModel = "equalpower";
            panLeftNode.setPosition(1, 0, 0);
            panRightNode.setPosition(-1, 0, 0);
        } else {
            this.panLeftNode.pan.value = -1;
            this.panRightNode.pan.value = 1;
        }

        updateVolume(document.getElementById("volumeSlider").value);

        this.osc1Freq = document.getElementById("freq1").value;
        this.osc1 = context.createOscillator();
        this.osc1.frequency.value = osc1Freq;

        this.osc2Freq = document.getElementById("freq2").value;
        this.osc2 = context.createOscillator();
        this.osc2.frequency.value = osc2Freq;

        this.gain = context.createGain();
        this.gain.gain.setValueAtTime(0.001, context.currentTime);

        this.osc1.connect(this.panLeftNode);
        this.osc2.connect(this.panRightNode);
        this.panLeftNode.connect(this.gain);
        this.panRightNode.connect(this.gain);
        this.gain.connect(context.destination);
        this.osc1.start(0);
        this.osc2.start(0);
        this.gain.gain.exponentialRampToValueAtTime(
            this.volume,
            context.currentTime + 2
        );
        this.playing = true;

        var minsToPlay = document.getElementById("timerMins").value;
        timer(minsToPlay);
        document.getElementById("startButton").innerHTML = "Stop";
        document.getElementById("timerMins").disabled = "true";
    } else {
        stop();
    }
}

async function stop() {
    document.getElementById("startButton").disabled = "true";
    setCountdownText("--", "--");

    clearInterval(this.timerId);
    this.gain.gain.exponentialRampToValueAtTime(
        this.volume / 1.05,
        context.currentTime + 0.3
    );
    await delay(300);
    this.gain.gain.exponentialRampToValueAtTime(
        this.volume / 1.5,
        context.currentTime + 0.3
    );
    await delay(300);
    this.gain.gain.exponentialRampToValueAtTime(
        this.volume / 2,
        context.currentTime + 0.4
    );
    await delay(400);
    this.gain.gain.exponentialRampToValueAtTime(0.001, context.currentTime + 2);
    await delay(2000);
    this.osc1.stop();
    this.osc2.stop();

    document.getElementById("startButton").innerHTML = "Start";
    document.getElementById("startButton").removeAttribute("disabled");
    document.getElementById("timerMins").removeAttribute("disabled");
    setCountdownTextFromSeconds(0);
    this.playing = false;
}

function updateText(oscNum) {
    if (oscNum === 1) {
        document.getElementById("frequencyText1").value = this.osc1Freq;
        return;
    } else {
        document.getElementById("frequencyText2").value = this.osc2Freq;
        return;
    }
}

function updateSlider(oscNum) {
    if (oscNum === 1) {
        document.getElementById("freq1").value = this.osc1Freq;
        return;
    } else {
        document.getElementById("freq2").value = this.osc2Freq;
        return;
    }
}

function updateFrequency(newFreq, oscillator) {
    var correctedFreq = newFreq;
    if (correctedFreq > 1000) {
        correctedFreq = 1000;
    } else if (correctedFreq < 1) {
        correctedFreq = 1;
    }
    if (oscillator === 1) {
        this.osc1Freq = correctedFreq;
        if (this.playing === true) this.osc1.frequency.value = correctedFreq;
        updateText(1);
        updateSlider(1);
        return;
    } else if (oscillator === 2) {
        this.osc2Freq = correctedFreq;
        if (this.playing === true) this.osc2.frequency.value = correctedFreq;
        updateText(2);
        updateSlider(2);
        return;
    }
}

function updateVolume(newVolume) {
    this.volume = newVolume / 100;
    if (typeof this.gain !== "undefined") {
        this.gain.gain.linearRampToValueAtTime(
            this.volume,
            context.currentTime + 0.1
        );
    }
}

const delay = (ms) => new Promise((res) => setTimeout(res, ms));

function timer(mins) {
    var countdownSeconds = mins * 60;
    setCountdownTextFromSeconds(countdownSeconds);
    this.timerId = setInterval(function () {
        countdownSeconds -= 1;
        if (countdownSeconds <= 0) {
            stop();
        } else {
            setCountdownTextFromSeconds(countdownSeconds);
        }
    }, 1000);
}

function setCountdownTextFromSeconds(countdownSeconds) {
    var min = padNumberWithZero(countdownSeconds / 60);
    var sec = padNumberWithZero(countdownSeconds - min * 60);
    setCountdownText(min, sec);
}

function padNumberWithZero(num) {
    return Math.floor(num).toString().padStart(2, "0");
}

function setCountdownText(min, sec) {
    document.querySelector("div.countdown-text").innerHTML = min + ":" + sec;
}
