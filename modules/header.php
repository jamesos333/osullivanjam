<?php
    function letterPath($letter){
        return IMAGE_PATH_LETTERS . $letter . '.gif';
    }
?>

<div class="container">
    <div class="header" alt="header for osullivanjam.es">
        <a href="/">
            <div class="name">
                <div class="row">
                    <img src="<?=letterPath('j')?>" alt="">
                    <img src="<?=letterPath('a')?>" alt="">
                    <img src="<?=letterPath('m')?>" alt="">
                    <img src="<?=letterPath('e')?>" alt="">
                    <img src="<?=letterPath('s')?>" alt="">
                </div>
            </div>
            <div class="name">
                <div class="row">
                    <img src="<?=letterPath('o')?>" alt="">
                    <img src="<?=letterPath('s')?>" alt="">
                    <img src="<?=letterPath('u')?>" alt="">
                    <img src="<?=letterPath('l')?>" alt="">
                    <img src="<?=letterPath('l')?>" alt="">
                    <img src="<?=letterPath('i')?>" alt="">
                    <img src="<?=letterPath('v')?>" alt="">
                    <img src="<?=letterPath('a')?>" alt="">
                    <img src="<?=letterPath('n')?>" alt="">
                </div>
            </div>
        </a>
    </div>
</div>