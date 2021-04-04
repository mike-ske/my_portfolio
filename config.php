<?php

// ========== LOCAL DATABASE CONNECTION =======
// define('DB_HOST', 'localhost');
// define('DB_PASS', 'alumona@123');
// define('DB_NAME', 'thinuuwc_contact');
// define('DB_USER', 'thinuuwc_');

// ========== REMOTE DATABASE CONNECTION =======
define('DB_HOST', 'localhost');
define('DB_PASS', '');
define('DB_NAME', 'contact');
define('DB_USER', 'root');


// FUNCTION TO CONVERT DB DATE TO UNIX DATE AND TIMESTAMP

function convertDate($date = ''){
    $convert_date = strtotime($date);
   return date('j F Y', $convert_date);
}

