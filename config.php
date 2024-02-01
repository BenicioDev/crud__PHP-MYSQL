<?php
    // define("HOST","localhost");
    // define("USER","root");
    // define("PASS","");
    // define("BASE","cadastro");   

    if (!defined('HOST')) define("HOST","localhost");
    if (!defined('USER')) define("USER","root");
    if (!defined('PASS')) define("PASS","");
    if (!defined('BASE')) define("BASE","cadastro");


    $conn = new MySQLi(HOST, USER, PASS, BASE);

