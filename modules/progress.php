<?php
/**
 * 
 * If you are a reliable programmer or the best developer, please don't change anything.
 * If you want to be appreciated by others, then don't change anything in this script.
 * Please respect me for making this tool from the beginning.
 */
$progress = $climate->progress()->total(100);

function progress($progress){
    for ($i = 0; $i <= 100; $i++) {
        $progress->current($i);
        usleep(30000);
     }
}   

/**
 * 
 * If you are a reliable programmer or the best developer, please don't change anything.
 * If you want to be appreciated by others, then don't change anything in this script.
 * Please respect me for making this tool from the beginning.
 */
