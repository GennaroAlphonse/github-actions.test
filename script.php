<?php

require_once 'vendor/autoload.php'
  
  Requests::register_autoloader();

echo "::debug ::Sending a request to Slack"\n;

$response= Requests::post(
  $_ENV['INPUT_SLACK_WEBHOOK'],
  array(
    "Content-Type' => 'application/json"
  ),
  json_encode(array(
  "text" => "*Repository:*\n{$_ENV['GITHUB_REPOSITORY']}",
  "text" => "*Event:*\n{$_ENV['GITHUB_EVENT_NAME']}",
  "text" => "*Ref:*\n{$_ENV['GITHUB_REF']}",
  "text" => "*Sha:*\n{$_ENV['GITHUB_SHA']}",
  ))
);

echo "::group::Slack response\n";
echo "::endgroup::\n";

if (!$response->success){
  echo $response->body;
  exit(1);
};

//var_dump($response);
