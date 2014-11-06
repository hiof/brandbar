<?php
  header('Access-Control-Allow-Origin: *');

  //header('Access-Control-Allow-Origin: http://mysite1.com');
  //header('Access-Control-Allow-Origin: http://localhost:9000');
  //header('Access-Control-Allow-Origin: http://localhost:8080');
  //header('Access-Control-Allow-Origin: https://localhost:8080');
  //header('Access-Control-Allow-Origin: http://blogg.hiof.no');
  //header('Access-Control-Allow-Origin: https://blogg.hiof.no');
  //header('Access-Control-Allow-Origin: https://hiof.no');

  header('Content-type: application/json; charset=utf-8');
  header("Cache-Control: max-age=300");

  $hiofstr = require_once('assets.config.php');

  $stylesheet = $hiofstr['hiof']['assets']['css'][0];
  $script = $hiofstr['hiof']['assets']['js'][0];

  echo "{";
    echo '"css":"//hiof.no/assets/plugins/hiof-brandbar' . $stylesheet . '",';
    echo '"js":"//hiof.no/assets/plugins/hiof-brandbar' . $script . '"';
  echo "}";

?>