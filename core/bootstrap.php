<?php
    $config = require 'config.php';
    require_once('core/router.php');
    require_once('core/request.php');
    require "database/Connection.php";
    require "database/QueryBuilder.php";

    return $query = new QueryBuilder(
        (Connection::make($config['database']))
    );