<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 8/24/18
 * Time: 3:16 PM
 */
// *******************************************************
// script function to connect urls to root path.
/**
 * @param $script_path
 * @return string
 */
function url_for($script_path) {
    // adds leading '/' if not present.
    if ($script_path[0] != '/') {
        $script_path = '/' . $script_path;
    }

    return WWW_ROOT . $script_path;
}

//*************************************************************