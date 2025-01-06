<?php
$pageName = "contact";
$cssName = $pageName;
$description = "speak to the wizard, behold your fate!";
$additionalHeader = "<noscript><style>#stone{display: none !important;}</style></noscript>";
?>
<?php include ELEMENTS_PATH_TEMPLATES_TOP ?>

<div class="wizard-title">
    <img src="<?= IMAGE_PATH_CONTACT . 'speaktothewizardtitle1.png'; ?>" alt="Speak To The Wizard">
    <img src="<?= IMAGE_PATH_CONTACT . 'beholdyourfatetitle1.png'; ?>" alt="Behold Your Fate!">
</div>

<div class="chat-container">
    <div id="wizardcontainer">
        <?php include ELEMENTS_PATH_CONTACT . 'chatbox.php'; ?>
    </div>
    <img
        src="<?= IMAGE_PATH_CONTACT . 'emerald.gif'; ?>"
        alt="seeingstone"
        id="stone"
        hx-get="/contact/chatbox"
        hx-swap="beforeend"
        hx-target="#wizardcontainer"
        preload="always mousedown">
</div>

<div class="wizard-decoration">
    <img src="<?= IMAGE_PATH_CONTACT . 'wizard.gif'; ?>" width="353" height="650" alt="wizard">
    <img src="<?= IMAGE_PATH_CONTACT . 'wizard.gif'; ?>" width="353" height="650" alt="wizard">
</div>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>