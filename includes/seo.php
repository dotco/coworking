<?php
//todo: make these come from expedrion db
$seo_live = false;
$seo_title = "Benefits of Coworking";
$seo_description = "benefits of coworking description here.";
if($seo_live !== true){
    header("X-Robots-Tag: noindex, nofollow", true);
}

