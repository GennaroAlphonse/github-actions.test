<?php

require_once 'vendor/autoload.php'
  
  Requests::register_autoloader();

$response= Requests::post(
  "https://hooks.slack.com/services/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",
  array(
    'Content-Type' => 'application/json'
  ),
  json_encode(array(
    'text' => 'Some message'
  ))
);

var_dump($response);
