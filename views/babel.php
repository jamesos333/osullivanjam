<?php 
    include_once '_config.php';
    $pageName = "contact";
    $cssName = $pageName;
    $useHtmx = true;
?>
<?php include ELEMENTS_PATH_TEMPLATES . 'top.php'; ?>

    <p class="title">SPEAK TO THE WIZARD, BEHOLD YOUR FATE!</p>
    <div class="chat-container">
        <div id="wizardcontainer" style="min-height: 110px">
            <?php include ELEMENTS_PATH_CONTACT . 'chatbox.php';?>
        </div>
            <img id="fade-in" hx-get="/contact/chatbox" hx-target="#wizardcontainer" hx-swap="beforeend settle:1s" 
                src="<?=IMAGE_PATH_CONTACT . 'emerald.gif'; ?>" alt="seeingstone" id="stone" class="center" style="width: 10%; margin-top: 20px">
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