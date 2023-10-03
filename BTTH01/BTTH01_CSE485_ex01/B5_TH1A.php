<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];
// Hãy lấy giá trị = 3 mà có key là b từ mảng trên
$value = $a['b']['o']['b'];
echo "Giá trị 3 mà có key là b = ".$value;
echo "<br>";
// Hãy lấy giá trị = 1 mà có key là c từ mảng trên
$value_2 = $a['a']['c'];
echo "Giá trị 1 mà có key là c = ".$value_2;
echo "<br>";
// Hãy lấy thông tin của phần tử có key là a
$element = $a['a'];
echo "Thông tin của phần tử có key là a = ".$a."<br>";
print_r($a);
echo "<br>";
var_dump($a);
?>