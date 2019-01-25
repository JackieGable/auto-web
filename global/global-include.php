<?php
define('SITEROOT', realpath(__DIR__.'/..'));
$master_css_path = "http://".$_SERVER["SERVER_NAME"]."/PATH/TO/global/master-style.css";
echo "<link rel='stylesheet' href=".$master_css_path.">";
echo "<link rel='stylesheet' href='page.css'";
?>
