<?php
// ওয়েবসাইটের URL
$url = "https://www.free4talk.com";

// cURL ব্যবহার করে কনটেন্ট ফেচ করা
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // HTTPS ভেরিফিকেশন নিষ্ক্রিয়
curl_setopt($ch, CURLOPT_HEADER, false);
$response = curl_exec($ch);
curl_close($ch);

// রেসপন্স প্রিন্ট করা
header("Content-Type: text/html"); // HTML কনটেন্ট হিসেবে রেসপন্স পাঠানো
echo $response;
?>
