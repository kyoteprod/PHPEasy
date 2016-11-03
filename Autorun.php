<?php

/**
 *
 */

define('IN_APP', 0);
define('_ROOT_DIR_', dirname(__FILE__));

$incDirectories = ['controllers', 'models'];
$incRepositry = [];

foreach($incDirectories as $incDir) {
  $incRepositry[] = glob(_ROOT_DIR_ . '/' . $incDir . '/*php');
}

foreach($incRepositry as $incRep) {
  foreach($incRep as $filePath) {
    require_once($filePath);
  }
}
