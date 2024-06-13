<?php
    function letterPath($letter){
        return IMAGE_PATH_LETTERS . $letter . '.gif';
    }
?>

<div class="container">
    <div class="header">
        <a href="/">
            <div class="name">
                <div class="row">
                    <img src="<?=letterPath('j')?>" alt="j">
                    <img src="<?=letterPath('a')?>" alt="a">
                    <img src="<?=letterPath('m')?>" alt="m">
                    <img src="<?=letterPath('e')?>" alt="e">
                    <img src="<?=letterPath('s')?>" alt="s">
                </div>
            </div>
            <div class="name">
                <div class="row">
                    <img src="<?=letterPath('o')?>" alt="o">
                    <img src="<?=letterPath('s')?>" alt="s">
                    <img src="<?=letterPath('u')?>" alt="u">
                    <img src="<?=letterPath('l')?>" alt="l">
                    <img src="<?=letterPath('l')?>" alt="l">
                    <img src="<?=letterPath('i')?>" alt="i">
                    <img src="<?=letterPath('v')?>" alt="v">
                    <img src="<?=letterPath('a')?>" alt="a">
                    <img src="<?=letterPath('n')?>" alt="n">
                </div>
            </div>
        </a>
    </div>
</div>