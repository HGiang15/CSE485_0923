<?php
// Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự
// thường. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra
// VD: mảng 1 có các phần tử [‘a’, ‘b’, ‘ABC’] sau khi chuyển sẽ là [‘a’, ‘b’, ‘abc’]
// Áp dụng với 1 số mảng sau:
// $arrs = [‘1’, ‘B, ‘C’, ‘E’];
// $arrs = [‘a’, 0, null, false];

function convertToLowercase($arr) {
    $result = array_map('strtolower', $arr);
    return $result;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];

$newArr1 = convertToLowercase($arr1);
$newArr2 = convertToLowercase($arr2);
$newArr3 = convertToLowercase($arr3);
echo "Mảng ['a', 'b', 'ABC'] chuyển thành là: ";
var_dump($newArr1);
echo "<br>";
echo "Mảng ['1', 'B', 'C', 'E'] chuyển thành là: ";
var_dump($newArr2);
echo "<br>";
echo "Mảng ['a', 0, null, false] chuyển thành là: ";
var_dump($newArr3);


?>