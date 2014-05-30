<?php
require_once('db.php');
try {
    connect_to_db();
} catch (Exception $e) {
   die($e);
}
$seo_live = false;
$seo_title = "Benefits of Coworking";
$seo_description = "benefits of coworking description here.";
if($seo_live !== true){
    header("X-Robots-Tag: noindex, nofollow", true);
}
