<?php
include_once 'config.php';
$pageName = "recipes";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <meta name="description" content="osullivanjam.es">
    <link rel="stylesheet" href="<?= CSS_PATH . 'styles.css'; ?>">
    <link rel="stylesheet" href="<?= CSS_PATH . 'cooking.css'; ?>">
    <link rel="stylesheet" href="<?= CSS_PATH . 'specialeffects.css'; ?>">
    <link rel="icon" type="image/x-icon" href="<?= IMAGE_PATH . 'icon.png'; ?>">
    <title><?= 'osullivanjam.es: ' . $pageName; ?></title>
</head>

<body>
    <?php include ELEMENTS_PATH . 'header.php'; ?>
    <div id="content">
        <?php include ELEMENTS_PATH . 'navbar.php'; ?>
        <div class="wrapper">

            <div class="recipes">
                <table>
                    <tr>
                        <th style="width:40px;">1</th>
                        <td>Soup of Perpetual Blindness</td>
                        <td style="width:min-content;">40hrs</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>World Famous Chili</td>
                        <td>2hrs</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Beef Stew</td>
                        <td>4hrs</td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>Chicken and Rice</td>
                        <td>1.5hrs</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    <?php include ELEMENTS_PATH . 'footer.php'; ?>
</body>

</html>