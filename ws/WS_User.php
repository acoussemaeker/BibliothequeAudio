<?php

require '../view/Connection_BDD.php';
require_once '/IWebServiciable.php';

class WS_User implements IWebServiciable {

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
        $cnx->beginTransaction();
//        echo "<pre>";
//        print_r($cnx);
//        echo "</pre>";

        $SQL = "INSERT INTO user(Pseudo, Password, Mail, Grade) VALUES (".$this->requestParams['nomUser'].",".$this->requestParams['prenomUser'].",".$this->requestParams['MailUser'].",0)";
        $cnx->query($SQL);
        $cnx->commit();
        return true;


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

