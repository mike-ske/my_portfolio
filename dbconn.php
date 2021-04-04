<?php 
require 'config.php';
$host = DB_HOST;
$user = DB_USER;
$pass = DB_PASS;
$db = DB_NAME;

$conn = mysqli_connect($host, $user, $pass, $db);

// CHECK FOR CENNECTION
if ($conn) 
{
    echo "";
}
else 
{
    die("Failed to connect to database!" . mysqli_error($conn));
}


// ===== DEFINE PHPMAILER FUNCTIONS ==========

define('MAIL_USERNAME', 'thinksoftcreative@gmail.com');
define('MAIL_PASSWORD', 'thinksoft2021');

?>