
<?php

  require_once('core/routes.php');
  require_once('core/router.php');
  require_once('core/request.php');




  require_once Router::load($routes)->direct(Request::uri());

