<?php
require  "library/rb.php";
R::setup( 'mysql:host=localhost;dbname=test',
    'root', '' );

session_start();