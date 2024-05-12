<?php
    function letterPath($letter){
        echo IMAGE_PATH_LETTERS . $letter . '.gif';
    }
?>

<script>0</script>
<div class="container">
    <div class="header">
        <a href="/">
            <div class="name">
                <div class="row">
                    <img src="<?php letterPath('j')?>" alt="j">
                    <img src="<?php letterPath('a')?>" alt="a">
                    <img src="<?php letterPath('m')?>" alt="m">
                    <img src="<?php letterPath('e')?>" alt="e">
                    <img src="<?php letterPath('s')?>" alt="s">
                </div>
            </div>
            <div class="name">
                <div class="row">
                    <img src="<?php letterPath('o')?>" alt="o">
                    <img src="<?php letterPath('s')?>" alt="s">
                    <img src="<?php letterPath('u')?>" alt="u">
                    <img src="<?php letterPath('l')?>" alt="l">
                    <img src="<?php letterPath('l')?>" alt="l">
                    <img src="<?php letterPath('i')?>" alt="i">
                    <img src="<?php letterPath('v')?>" alt="v">
                    <img src="<?php letterPath('a')?>" alt="a">
                    <img src="<?php letterPath('n')?>" alt="n">
                </div>
            </div>
        </a>
    </div>
</div>