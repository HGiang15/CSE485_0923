<?php
   $arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
   $favoriteColors = [
       'Anh' => 'đỏ',
       'Sơn' => 'trắng',
       'Thắng' => 'cam',
       'tôi' => 'trắng'
   ];
   
   $result = "";
   
   foreach ($favoriteColors as $person => $color) {
       $result .= "Màu <span style='color:red;'> " . $color . "</span> là màu yêu thích của " . $person . ", ";
   }
   
   $result = rtrim($result, ', ');
   
   echo $result;
   


?>