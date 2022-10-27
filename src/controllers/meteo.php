<?php

include_once('model/config.php');
include_once('../../views/page.php');

function creatTable() {
    $data = dbConnect();

    var_dump('dbConnect()');
}