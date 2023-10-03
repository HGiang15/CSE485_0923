<?php
// Tìm chuỗi có độ dài lớn nhất, nhỏ nhất và độ dài tương ứng đó từ mảng sau:
// $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];
// Kết quả mong đợi: 
// Chuỗi lớn nhất là program is PHP, độ dài = 14
// Chuỗi lớn nhất là is, độ dài = 2
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

// lưu trữ chuỗi lớn nhỏ
$maxLength = $array[0];
$minLength = $array[0];

foreach ($array as $str) {
    // độ dài chuỗi hiện tại
    $length = strlen($str);

    // ss cập nhật chuỗi lớn 
    if ($length > strlen($maxLength)) {
        $maxLength = $str;
    }

    // ss cập nhật chuỗi nhỏ 
    if ($length < strlen($minLength)) {
        $minLength = $str;
    }
}

echo "Chuỗi lớn nhất là $maxLength, độ dài = " . strlen($maxLength) . "<br>";
echo "Chuỗi nhỏ nhất là $minLength, độ dài = " . strlen($minLength) . "<br>";



?>