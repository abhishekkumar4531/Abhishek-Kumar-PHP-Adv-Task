<?php
  require "vendor/autoload.php";
  use GuzzleHttp\Client;
  $client = new Client();
  $res = $client->request('GET', 'https://ir-dev-d9.innoraft-sites.com/jsonapi/node/services');

  $apiData = json_decode($res->getBody());

  print_r ($apiData->data['15']->attributes->title);
?>