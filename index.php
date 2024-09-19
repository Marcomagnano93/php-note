<?php

require 'functions.php';

require 'router.php';

//invoca la funzione che manda al controller che manda alla vista
routeToController($uri, $routes);