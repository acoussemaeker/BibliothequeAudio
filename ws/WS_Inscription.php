<?php

require '../view/Connection_BDD.php';
require_once '/IWebServiciable.php';

class WS_Inscription implements IWebServiciable {

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

            $SQL = "INSERT INTO user(Pseudo, Password, Mail, Grade) VALUES ('" . $this->requestParams['nomUser'] . "','" . $this->requestParams['passwordUser'] . "','" . $this->requestParams['MailUser'] . "','0')";
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

