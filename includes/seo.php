<?php
require_once('db.php');
try {
    connect_to_db();
    $expedrion_settings = x1("select * from seostudies where study = 1 order by id desc");
    $seo_live = $expedrion_settings['is_live'] === '0' ? false : true;
    $seo_title = $expedrion_settings['page_title'];
    $seo_description = $expedrion_settings['page_description'];
    $seo_body = $expedrion_settings['page_body'];
    if($seo_live !== true){
        header("X-Robots-Tag: noindex, nofollow", true);
    }
} catch (Exception $e) {
   die($e);
}
