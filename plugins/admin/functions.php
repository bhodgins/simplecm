<?php
function mod_import($name){
include "../../modules/".$name."/module.php";
};
mod_import($_GET["mod"]);