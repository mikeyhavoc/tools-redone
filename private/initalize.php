<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 8/24/18
 * Time: 3:14 PM
 */
// Assign the root URL to a PHP constant
// * Do not need to include the domain
// * Use same document root as web server
// * Can ser a hardcoded value:
// e.g define("WWW_ROOT", '/~mike/globebank/public');

// __FILE__ returns the current path to this file => Private folder
// dirname() returns the path to the parent directory
//$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
//$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
//define("WWW_ROOT", $doc_root);

define("PRIVATE_PATH", dirname(__FILE__));  # private folder for private items.
define("PROJECT_PATH", dirname(PRIVATE_PATH)); # private folder for shared things
define("PUBLIC_PATH", PROJECT_PATH . '/public'); # public folder
define("SHARED_PATH", PRIVATE_PATH . '/shared'); # shared folder
// * Can dynamically find everything in URL up to "/public"
//ROOT of file.
define('WWW_ROOT', ''); # just comment out and use the one below when in windows.
//define('WINDOWS', '/tools-site'); // FOR WINDOWS TESTING
//define("WWW_ROOT", '' . WINDOWS);
# windows go from blank root to localhost/ for xampp

define("IMAGES", WWW_ROOT . '/public/');
// easily connects root->(tools-site)->public->|img|

require_once('functions.php');
include('connection.php');