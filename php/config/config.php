<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 06/06/2018
 * Time: 14:59
 */

define('DB_NAME', 'alucar');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($mysqli === false){
    die("ERROR: Falha ao conectar-se ao banco de dados ".$mysqli->connect_erro);
}