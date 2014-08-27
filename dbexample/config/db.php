<?php
session_start();
require 'define.php';
require 'tables.php';
try {
  $con = mysql_connect(DB_HOST,DB_USERNAME,DB_PASSWORD);
  if (!$con) {
    echo "Connection Problem Error Code:".mysql_errno()." : ".mysql_error();
  }

  $isSelect = mysql_select_db(DB_NAME,$con);
  if (!$isSelect) {
    echo "Problem occured to select database ".DB_NAME." Error Code:".mysql_errno()." : ".mysql_error();
  }
} catch (Exception $e) {
    echo $e->getMessage();
}