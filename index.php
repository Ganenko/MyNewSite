<?php

include_once ('my_controller_class.php');
$start = new MyController();
//$controller=serialize($start);
//file_put_contents('object.txt',$controller);
//$controller=file_get_contents('object.txt');
//$start=unserialize($controller);
$start->getAllRecords();

