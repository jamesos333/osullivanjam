<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH_GLOBAL . 'icon.png' ?>">
    <meta name="description" content="osullivanjam.es">
    <meta name="theme-color" content="black" />
    <meta name="robots" content="noindex">
    <meta http-equiv="refresh" content="4; url=/">
    <title>moth</title>
    <style>
        body {
            background-color: black;
        }

        h1 {
            color: blue;
        }

        .content {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .content img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 30vw;
            animation: fadeIn 3s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <a href="/">
        <div class="content">
            <img src="<?= IMAGE_PATH_MOTH . 'moth.gif'; ?>" alt="moth">
        </div>
    </a>
</body>

</html>