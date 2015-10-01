<?php




class Connection_BDD {

    public static function getInstance() {
        $hote='127.0.0.1';
        $user='root';
        $passwd='';
        $database='bibliothequeaudio';
        $cnx=new mysqli($hote,$user,$passwd,$database);
        $cnx->set_charset("utf8");
        return $cnx;
    }

}