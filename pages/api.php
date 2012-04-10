<?

// SkyPHP API Controller

// specify the classes allowed to be auto-loaded by this controller

$class = $p->queryfolders[0];
$method = $p->queryfolders[1];

$o = new $class;

