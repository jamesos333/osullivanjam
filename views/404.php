<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="404" content="osullivanjam.es">
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH_GLOBAL . 'icon.png' ?>">
    <meta name="theme-color" content="black" />
    <meta name="robots" content="noindex">
    <meta http-equiv="refresh" content="4; url=/">
    <title>404</title>
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

        .content h1 {
            text-align: center;
            font-size: 5vw;
            margin: 0px;
            color: red;
        }

        .content h2 {
            text-align: center;
            color: white;
            font-size: 2vw;
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
            <h1>404</h1>
            <img src="<?= IMAGE_PATH_404 . 'smiledog.gif'; ?>" alt="smiledog">
            <h2>looking for something?</h2>
        </div>
    </a>
</body>

</html>