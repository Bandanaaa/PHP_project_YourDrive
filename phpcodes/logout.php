<?php
/**
 * Created by PhpStorm.
 * User: Bandanaa
 * Date: 8/18/2018
 * Time: 23:05
 */
session_start();
session_unset();
session_destroy();

header('Location:' . 'home.html');
