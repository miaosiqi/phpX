<<<<<<< HEAD
<?php 

  echo 'hi this is my project, thas';
		
 ?>
=======
<?php

  require_once('core/routes.php');
  require_once('core/router.php');
  require_once('core/request.php');




  require_once Router::load($routes)->direct(Request::uri());
>>>>>>> 4690cca0b3d4893814fbe8bebd054e73fff54e9e
