<?php

require '../view/Connection_BDD.php';
require_once '/IWebServiciable.php';

class WS_UpdateUser implements IWebServiciable {

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
            $SQL = "UPDATE user SET Pseudo='".$this->requestParams['Pseudo']."',Password='".$this->requestParams['Password']."',Mail='".$this->requestParams['Mail']."' WHERE ID = '".$this->requestParams['Id']."'" ;
            $cnx->query($SQL);
            $cnx->commit();
            return true;
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

