<?php

function include_prefix(){

    $prefix = "";

    $dir_to_check = $prefix."include";

    $conta = 0;
    
    while(!is_dir($dir_to_check) && $conta <= 10){
        $conta++;

        $prefix .= "../";
        $dir_to_check = $prefix."include";
    }

    if($conta > 10){
        throw new Exception(__FUNCTION__." | cartella include non trovata");
    }

    return $prefix;
}