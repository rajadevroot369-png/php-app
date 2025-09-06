<?php
$url = "https://www.tangrijewellers.in/web/commonRest/generateOTP.json";

$payload = "mobileNo=8610131863&type=SIGNUP&emailId=";

$headers = [
    "Accept: application/json, text/javascript, */*; q=0.01",
    "Accept-Language: en-US,en;q=0.9",
    "Connection: keep-alive",
    "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
    "Origin: https://www.tangrijewellers.in",
    "Referer: https://www.tangrijewellers.in/register",
    "Sec-Fetch-Dest: empty",
    "Sec-Fetch-Mode: cors",
    "Sec-Fetch-Site: same-origin",
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 OPR/115.0.0.0",
    "X-Requested-With: XMLHttpRequest",
    "sec-ch-ua: \"Chromium\";v=\"130\", \"Opera\";v=\"115\", \"Not?A_Brand\";v=\"99\"",
    "sec-ch-ua-mobile: ?0",
    "sec-ch-ua-platform: \"Windows\""
];

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => $headers,
]);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);
?>
