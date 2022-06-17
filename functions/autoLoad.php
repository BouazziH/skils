<?php

$fuctionFiles = glob('./functions/*.php');//glob chercher tout les fichiers.php dans le repertoire functions 

for ($i=0; $i <count($fuctionFiles) ; $i++) { 
    if($fuctionFiles[$i] !== './functions/autoLoad.php')
    require_once $fuctionFiles[$i];
}
