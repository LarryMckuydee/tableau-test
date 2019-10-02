<?php
require "vendor/autoload.php";

use Tableau\TrustedTicket;
use Tableau\Foo;

//router
header('Access-Control-Allow-Origin: <vue-application-address>');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');
if ($_SERVER['REQUEST_URI'] == "/api/tableau/generate-trusted-key") {
    $tableauTrustedTicket = new TrustedTicket();
    $trustedTicket = $tableauTrustedTicket->getTicket('testuser', null, null)->body;

    $data = ['data' => $trustedTicket];

    echo json_encode($data);
    
} elseif ($_SERVER['REQUEST_URI'] == "/foo") {
    $foo = new Foo();
    echo $foo->boo();
}
else {
    return FALSE;
}
?>
