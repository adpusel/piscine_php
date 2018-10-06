<?php
/**
 * Created by PhpStorm.
 * User: adpusel
 * Date: 10/6/18
 * Time: 7:48 PM
 */

session_start();
session_destroy();
header('Location: ../login.php');