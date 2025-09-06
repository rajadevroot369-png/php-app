<?php
$phnum = "8610131863"; // your mobile number

$url = "https://api.mycii.in/Signup/SendOTPNewUser?Username=null&mobile=" . urlencode($phnum);

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "accept: */*",
        "accept-language: en-US,en;q=0.9",
        "content-type: application/json; charset=utf-8",
        "origin: https://cam.mycii.in",
        "priority: u=1, i",
        "referer: https://cam.mycii.in/",
        "sec-ch-ua: \"Chromium\";v=\"130\", \"Opera\";v=\"115\", \"Not?A_Brand\";v=\"99\"",
        "sec-ch-ua-mobile: ?0",
        "sec-ch-ua-platform: \"Windows\"",
        "sec-fetch-dest: empty",
        "sec-fetch-mode: cors",
        "sec-fetch-site: same-site",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 OPR/115.0.0.0"
    ]
]);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    echo $response;
}

curl_close($ch);
?>
