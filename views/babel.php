<?php 
    include_once '_config.php';
    $pageName = "contact";
    $cssName = $pageName;
?>
<?php include ELEMENTS_PATH_TEMPLATES . 'top.php'; ?>

    <script type="module" src="<?=JS_PATH . 'babel.js'; ?>"></script>
    <p class="title">SPEAK TO THE WIZARD, BEHOLD YOUR FATE!</p>
    <div class="chat-container">
        <div id="wizardcontainer" style="min-height: 110px">
            <?php include ELEMENTS_PATH_CONTACT . 'chatbox.php';?>
        </div>
        <img src="<?=IMAGE_PATH_CONTACT . 'emerald.gif'; ?>" alt="seeingstone" id="stone" class="center" style="width: 10%; margin-top: 20px">
    </div>

    <table>
        <tr>
            <th>
                <img src="<?=IMAGE_PATH_CONTACT . 'wizard.gif'; ?>" alt="wizard" style="width: 70%">
            </th>
            <th>
                <img src="<?=IMAGE_PATH_CONTACT . 'wizard.gif'; ?>" alt="wizard" style="width: 70%">
            </th>
        </tr>
    </table>

<?php include ELEMENTS_PATH_TEMPLATES . 'bottom.php'; ?>