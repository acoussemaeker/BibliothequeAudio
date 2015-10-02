<?php

require '../view/Connection_BDD.php';
require_once '/IWebServiciable.php';

class WS_GetUser implements IWebServiciable {

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
        $SQL = "SELECT * FROM user WHERE Id='".$this->requestParams['Id']."'
            ORDER BY Grade ASC, Pseudo ASC";
        $rs = $cnx->query($SQL);
//        return ($SQL);
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

