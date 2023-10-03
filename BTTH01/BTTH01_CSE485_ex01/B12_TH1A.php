<?php
//  Cho mảng sau:
//  $numbers = [
//   'key1' => 12, 
//   'key2' => 30, 
//   'key3' => 4, 
//   'key4' => -123, 
//   'key5' => 1234, 
//   'key6' => -12565, 
//  ];
//  ❖ Lấy ra phần tử đầu tiên, phần tử cuối cùng trong mảng trên
//  ❖ Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị từ mảng trên
//  ❖ Sắp xếp mảng theo chiều tăng, giảm các giá trị
//  ❖ Sắp xếp mảng theo chiều tăng, giảm các key

$numbers = [
    'key1' => 12, 
    'key2' => 30, 
    'key3' => 4, 
    'key4' => -123, 
    'key5' => 1234, 
    'key6' => -12565, 
   ];
   
   // Lấy ra phần tử đầu tiên
   $firstElement = reset($numbers);
   
   // Lấy ra phần tử cuối cùng
   $lastElement = end($numbers);
   
   // Tìm số lớn nhất
   $maxValue = max($numbers);
   
   // Tìm số nhỏ nhất
   $minValue = min($numbers);
   
   // Tính tổng các giá trị
   $sum = array_sum($numbers);
   
   // Sắp xếp mảng theo chiều tăng giá trị
   asort($numbers);
   
   // Sắp xếp mảng theo chiều giảm giá trị
   arsort($numbers);
   
   // Sắp xếp mảng theo chiều tăng key
   ksort($numbers);
   
   // Sắp xếp mảng theo chiều giảm key
   krsort($numbers);
   
   // In kết quả
   echo "Phần tử đầu tiên: $firstElement<br>";
   echo "Phần tử cuối cùng: $lastElement<br>";
   echo "Số lớn nhất: $maxValue<br>";
   echo "Số nhỏ nhất: $minValue<br>";
   echo "Tổng các giá trị: $sum<br>";
   echo "Mảng tăng giá trị: ";
   print_r($numbers);
