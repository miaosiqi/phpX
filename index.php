
<?php

require ('core/bootstrap.php');

require_once Router::load('routes.php')->direct(Request::uri(), Request::method());

