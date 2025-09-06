<?php
$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => "https://eraktkosh.mohfw.gov.in/BLDAHIMS/bloodbank/voluntryDonorsGroupRegistration.cnt?hmode=PRE_REGISTER_ADMIN_GET_OTP&mobile=8610131863",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "Accept: */*",
        "Referer: https://eraktkosh.mohfw.gov.in/BLDAHIMS/bloodbank/voluntryDonorsGroupRegistration.cnt",
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) Chrome/130.0.0.0 Safari/537.36",
        "X-Requested-With: XMLHttpRequest",
    ],
]);

$response = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);

if ($error) {
    echo "cURL Error: " . $error;
} else {
    echo $response; // raw response from server
}
?>
