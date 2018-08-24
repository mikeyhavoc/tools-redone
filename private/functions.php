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

function get_item_html($item) {
    $output = "<li><a href='details.php?id="
        . $item['t_id'] . "'><img src='"
        . $item["image"] . "' alt='"
        . $item["item_name"] . "' />"
        . "<p>View Details</p>"
        . "</a></li>";
    return $output;
} // end get_item_html

//*************************************************************

function random_catalog_array()
{
    include 'connection.php';

    try {
        $sql = 'SELECT t.id, t.item_name, t.sale_price, t.sold,
                i.image 
                FROM Tools as t
                JOIN Images as i 
                Order BY RAND() LIMIT 4';

        $results = $db->query($sql);

    } catch (Exception $e) {
        echo 'unable to retrieve random 4';
        exit;
    }
        $catalog = $results->fetchAll(PDO::FETCH_ASSOC);
      return $catalog;
}