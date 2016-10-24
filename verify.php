<?php
$access_token = '3U0GF51WQ92Al/VKSsgxZUV6NVdC/tbmW3H02TX424EcfATzXy4Hrby2P/KhPfQKnroiYjPsI9l3ivFsWR/XsI983Yopahezz8kieY52bWQ8coMQ7uG0WBqo+k+Q0kWswX38LhwlDFQIKJvk4m51lAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
