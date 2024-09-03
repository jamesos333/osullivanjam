<?php
$pageName = "contact";
$cssName = $pageName;
$useHtmx = true;
$description = "speak to the wizard, behold your fate!";
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
    <img hx-get="/contact/chatbox" hx-target="#wizardcontainer" hx-swap="beforeend"
        src="<?= IMAGE_PATH_CONTACT . 'emerald.gif'; ?>" alt="seeingstone" id="stone">
</div>

<table>
    <tr>
        <th>
            <img src="<?= IMAGE_PATH_CONTACT . 'wizard.gif'; ?>" alt="wizard" class="wizard-decoration">
        </th>
        <th>
            <img src="<?= IMAGE_PATH_CONTACT . 'wizard.gif'; ?>" alt="wizard" class="wizard-decoration">
        </th>
    </tr>
</table>

<?php include ELEMENTS_PATH_TEMPLATES_BOTTOM ?>