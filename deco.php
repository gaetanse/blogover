<?php
/**
 * Created by PhpStorm.
 * User: gaetanse
 * Date: 07/10/2018
 * Time: 19:26
 */
// remove all session variables

session_start();
session_unset();
session_destroy();

?>