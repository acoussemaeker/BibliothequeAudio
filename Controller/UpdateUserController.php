<?php
include_once '../ws/WS_UpdateUser.php';

$className = "WS_UpdateUser";

session_start();
$test = (json_decode($_SESSION['connexion']));
$array = [
    "Id" => $_POST['Id'],
    "Pseudo" => $_POST['Pseudo'],
    "Password" => $_POST['Password'],
    "Mail" => $_POST['Mail']
];

//GEstion d'erreur

$ws_instance = new $className($array);
//$ws_security = new WS_Securities();

//if($ws_instance->doNeedAuth())
//    if(!$ws_security->isAuth())
//        return 'error';

$method = "do".strtoupper($_SERVER['REQUEST_METHOD']);

$ws_response = $ws_instance->$method();


//switch ($_SERVER['REQUEST_METHOD']) {
//    case 'PUT':
//        $ws_response = $ws_instance->doPut();
//        break;
//    case 'DELETE':
//        $ws_response = $ws_instance->doDelete();
//        break;
//    case 'GET':
//        $ws_response = $ws_instance->doGet();
//        break;
//    case 'POST':
//        $ws_response = $ws_instance->doPost();
//        break;
//
//    default:
//        break;
//}

echo $ws_response;