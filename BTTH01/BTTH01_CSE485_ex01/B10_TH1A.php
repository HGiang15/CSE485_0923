<?php
//  Viết hàm chuyển toàn bộ các ký tự trong mảng số nguyên thành mảng các ký tự
//  hoa. Cần print_r hoặc var_dump mảng ra màn hình kiểm tra
//  Ví dụ: mảng 1 có các phần tử [‘a’, ‘b’, ‘ABC’] sau khi chuyển sẽ là [‘A’, ‘B’, ‘ABC’]
//  Áp dụng với 1 số mảng sau:
//  $arrs = [‘1’, ‘b, ‘c’, ‘d’];
//  $arrs = [‘a’, 0, null, false];
function convertToUppercase($arr) {
    $result = array_map('strtoupper', $arr);
    return $result;
}

$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'b', 'c', 'd'];
$arr3 = ['a', 0, null, false];

$newArr1 = convertToUppercase($arr1);
$newArr2 = convertToUppercase($arr2);
$newArr3 = convertToUppercase($arr3);

echo "Mảng ['a', 'b', 'ABC'] chuyển thành là: ";
var_dump($newArr1);
echo "<br>";
echo "Mảng ['1', 'b', 'c', 'd'] chuyển thành là: ";
var_dump($newArr2);
echo "<br>";
echo "Mảng ['a', 0, null, false] chuyển thành là: ";
var_dump($newArr3);

 
?>