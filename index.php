<?php

require 'vendor/autoload.php';
require 'Rafinita/RafinitaApi.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$RafinitaApi = new Rafinita\RafinitaApi();


$data = array();
$data = json_decode('{"action" : "sale", "auth" : "Y", "client_key" : "5b6492f0-f8f5-11ea-976a-0242c0a85007", "client_pass" : "d0ec0beca8a3c30652746925d5380cf3", "channel_id " : 1, "order_id" : 1, "order_amount" : 1, "order_currency" : "USD", "order_description" : "test", "card_number" : "4731185632242522", "card_exp_month" : "08", "card_exp_year" : "2025", "card_cvv2 " : "111", "payer_first_name" : "Test", "payer_last_name" : "Test", "payer_address" : "Test", "payer_country" : "UA", "payer_city": "Kyiv", "payer_zip" : "04111", "payer_email" : "inbox@mail.com", "payer_phone" : "+380951111111", "payer_ip" : "176.36.50.38", "term_url_3ds" : "http://example.com", "hash" : "d0ec0beca8a3c30652746925d5380cf3"}', true);

$rafinitaSale = $RafinitaApi->sale($data);

echo $rafinitaSale;
