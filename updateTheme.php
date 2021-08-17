<?php
    $themeConfig=[];
    $themeList = json_decode(file_get_contents("themes/themelist.json"), false);
    foreach($themeList as $themeCode => $themeFile) {
        $themeConfig[$themeCode]=json_decode(file_get_contents("themes/$themeFile.json"), false);
    }
    file_put_contents("theme.json", json_encode($themeConfig, JSON_PRETTY_PRINT));
    file_put_contents("theme.min.json", json_encode($themeConfig));