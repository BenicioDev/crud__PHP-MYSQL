<?php

    if (!defined('HOST')) define("HOST","localhost");
    if (!defined('USER')) define("USER","");
    if (!defined('PASS')) define("PASS","");
    if (!defined('BASE')) define("BASE","cadastro");


    $conn = new MySQLi(HOST, USER, PASS, BASE);

