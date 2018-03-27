<?php
$access_token = 'Q5FDv45xqC2HElUtYAoKpYX6P9VCHXEf2HRO2eWnt7Yh+GWRdA3/uzmEr2xH6e2f2uW+9hOC9IdWSfrgcGMpSzZq6ZkgC2pIz+0eDvceP19jMirXWr/wVmaK6QyldIc37w9VFC8KJy5bsFDAKawbEQdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
