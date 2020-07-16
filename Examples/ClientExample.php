<?php

require_once '../vendor/autoload.php';

$apiKey = 'cafe8e4c871bb7bf211c49e19aea1ad80c353836aed39eb505a4990f466ef0f0';

$hitPayClient = new \HitPay\Client($apiKey);

echo $hitPayClient->getApiKey();