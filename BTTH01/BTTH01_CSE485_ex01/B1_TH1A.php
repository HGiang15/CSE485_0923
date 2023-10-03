<?php
    $arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

    function calculateOperations($arrs) {
        $sum = array_sum($arrs); // tinh tong
        $product = array_product($arrs);// tinh tich
    
        // Tính hiệu các phần tử
        $diff = $arrs[0];
        for ($i = 1; $i < count($arrs); $i++) {
            $diff -= $arrs[$i];
        }
    
        // Tính thương các phần tử
        $quot = $arrs[0];
        for ($i = 1; $i < count($arrs); $i++) {
            if ($arrs[$i] != 0) {
                $quot /= $arrs[$i];
            } else {
                echo "Không thể chia cho 0.";
                return;
            }
        }
    
        echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = " . $sum . "<br>";
        echo "Tích các phần tử = " . implode(" * ", $arrs) . " = " . $product . "<br>";
        echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = " . $diff . "<br>";
        echo "Thương các phần tử = " . implode(" / ", $arrs) . " = " . $quot . "<br>";
    }
    
    calculateOperations($arrs);
