<?php
/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/
 
$config = array(
    "db" => array(
        "db1" => array(
            "database" => "cmis",
            "username" => "root",
            "password" => "damsel",
            "host" => "localhost"
        )/*,
        "db2" => array(
            "dbname" => "database2",
            "username" => "dbUser",
            "password" => "pa$$",
            "host" => "localhost"
        )*/
    ),
    "urls" => array(
        "baseUrl" => "http://cmisphp"
    ),
    "paths" => array(
        "uploads" => "/uploads",
        "images" => array(
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
        )
    )
);
 
/*
    I will usually place the following in a bootstrap file or some type of environment
    setup file (code that is run at the start of every page request), but they work 
    just as well in your config file if it's in php (some alternatives to php are xml or ini files).
*/
 
/*
    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/
defined("LIBRARY_PATH") or define("LIBRARY_PATH", $_SERVER['DOCUMENT_ROOT'] . '/assets/library/');
     
defined("TEMPLATES")    or define("TEMPLATES", $_SERVER['DOCUMENT_ROOT'] . '/assets/templates/');

defined("ROOT_PATH")    or define("ROOT_PATH", 'http://cmisphp');

defined("ROOT_BASE")    or define("ROOT_BASE", $_SERVER['DOCUMENT_ROOT'].'/');

defined("IMAGES")       or define("IMAGES", $_SERVER['DOCUMENT_ROOT'].'/assests/img/');


  if(!isset($_SESSION['user_allowed']) || empty($_SESSION['user_allowed'])){
    header('location:'.ROOT_PATH.'/login.php');

  }

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
 
?>