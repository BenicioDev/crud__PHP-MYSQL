<?php

    if (!defined('HOST')) define("HOST","localhost");
    if (!defined('USER')) define("USER","root");
    if (!defined('PASS')) define("PASS","1335400");
    if (!defined('BASE')) define("BASE","cadastro");


    $conn = new MySQLi(HOST, USER, PASS, BASE);

