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

function get_image_html($item) {
    $output = "<a class='text-center' href='details.php?id="
        . $item['t_id'] . "'><img class='random-images img-responsive rounded' src='public/"
        . $item["image"] . "' alt='"
        . $item["item_name"] . "' />"
        . "<p>View Details</p>"
        . "</a>";
    return $output;
} // end get_item_html



//*************************************************************

function random_catalog_array()
{
    include 'connection.php';

    try {
        $results = $db->query("SELECT t.t_id, t.item_name, t.sale_price, t.sold,
                i.image 
                FROM Tools as t
                JOIN Images as i
                ON t.t_id = i.t_id 
                Order BY RAND() LIMIT 3");

    } catch (Exception $e) {
        echo 'unable to retrieve random 4';
        exit;
    }
        $catalog = $results->fetchAll();
      return $catalog;
}