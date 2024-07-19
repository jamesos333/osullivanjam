<?php
    function getLinks() {
        // keywords denotes the structure of the array in reference to the template
        $keywords = array("%text%", "%url%", "%class%", "%size%");
        $linkTemplate = "<a href='%url%' class='%class%' style='font-size:%size%'>%text%</a>";
        $linkArray = array(
            array("A Gentle Introduction To Rust",                                  "https://stevedonovan.github.io/rust-gentle-intro/",        "tech"),
            array("Web Design Museum - Discover old websites, apps and software",   "https://www.webdesignmuseum.org/",                         "tech"),
            array("PREQUEL - The adventures of Katia Managan",                      "https://www.prequeladventure.com/",                        "art"),
            array("lipu nimi",                                                      "https://nimi.pona.la/",                                    "art"),
            array("An Oral History of Goosebumps: The Television Series - Conventional Relations", 
                "https://conventionalrelations.net/2020/08/20/an-oral-history-of-goosebumps-the-television-series/",                            "media"),
            array("[2021 no-intro/tosec clean romset] Hearto's 1g1r collection",    "https://archive.org/details/hearto-1g1r-collection",       "download"),
            array("Best Privacy Tools & Software Guide in 2024",                    "https://www.privacytools.io/",                             "tech"),
            array("Vladimir Ilyich Lenin: What Is To Be Done?",                     "https://www.marxists.org/archive/lenin/works/1901/witbd/", "books"),
            array("Obscure and Unknown: Deliriants of the Edgewood Arsenal Human Experiments ", 
                "https://nervewing.blogspot.com/2020/06/obscure-and-unknown-deliriants-of.html",                                                "news"),
            array("Drug Stats",                                                     "http://drugstats.net",                                     "news")
        );
        shuffle($linkArray);
        return generateLinkTable($linkTemplate, $keywords, $linkArray); 
    }

    function generateLinkTable($linkTemplate, $keywords, $linkArray) {
        $allLinks = "";
        foreach ($linkArray as $currentLink) {
            array_push($currentLink, randomFontSize());
            $allLinks .= str_replace($keywords, $currentLink, $linkTemplate);
        }
        return $allLinks;
    }

    function randomFontSize() {
        return random_int(20, 40) . "px";
    }
?>

<div class="linkContainer">
    <div class="link">
        <?php echo getLinks()?>
    </div>
</div>