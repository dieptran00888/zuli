<?php
/**
 * Created by PhpStorm.
 * User: DiepTran
 * Date: 3/7/2016
 * Time: 8:04 AM
 */
define("HOSTNAME","localhost");
define("USERNAME","root");
define("USERPASS","");
define("DB_NAME","csattt");
define("BASEURL","csattt");

$con= mysql_connect(HOSTNAME,USERNAME,USERPASS) OR DIE("Không kết nối đến localhost");
mysql_select_db(DB_NAME,$con) or die("Không tìm thấy db");
mysql_query("SET NAMES 'UTF-8'");
?>