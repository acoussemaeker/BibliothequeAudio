<?php

require '../view/Connection_BDD.php';
require_once '/IWebServiciable.php';

class WS_Connexion implements IWebServiciable {

    public $requestParams;

    function __construct($requestParams) {
        $this->requestParams = $requestParams;
    }

    public function doDelete() {

    }

    public function doGet() {

    }

    public function doPost() {
        try {
            $cnx = Connection_BDD::getInstance();

            $SQL = "SELECT Password FROM user WHERE Pseudo='".$this->requestParams['Login']."'";
            $rs = $cnx->query($SQL);
            while ($info = $rs->fetch_object()) {
                return (json_encode($info));
            }
        }
        catch(Exception $e){
            return false;
        }
    }

    public function doPut() {

    }

    public function doRequest() {

    }

    public function setParameters() {

    }

    public function doNeedAuth() {
        return true;
    }


} 

