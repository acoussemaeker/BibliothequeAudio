<?php

require '../view/Connection_BDD.php';
require_once '/IWebServiciable.php';

class WS_GetAudios implements IWebServiciable {

    public $requestParams;

    function __construct($requestParams) {
        $this->requestParams = $requestParams;
    }

    public function doDelete() {

    }

    public function doGet() {
    }

    public function doPost() {

        $cnx = Connection_BDD::getInstance();
        $SQL = "SELECT * FROM audio Order BY Id DESC ";
        $rs = $cnx->query($SQL);
        while ($info = $rs->fetch_object()) {
            return (json_encode($info));
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

